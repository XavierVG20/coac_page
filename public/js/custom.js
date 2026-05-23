/* ===================== CREDITOS ===================== */
const creditos = {
    productivo: { tasa: 21, montoMin: 500, montoMax: 50000, plazoMin: 6, plazoMax: 72 },
    agil: { tasa: 23, montoMin: 500, montoMax: 5000, plazoMin: 6, plazoMax: 30 },
    consumo: { tasa: 15.60, montoMin: 500, montoMax: 40000, plazoMin: 3, plazoMax: 36 },
    educativo: { tasa: 9, montoMin: 200, montoMax: 10000, plazoMin: 6, plazoMax: 48 },
    mujer: { tasa: 19, montoMin: 1, montoMax: 10000, plazoMin: 3, plazoMax: 36 }
};

function calcularCredito() {
    let tipo = document.getElementById("tipoCredito").value;
    let amortizacion = document.getElementById("tipoAmortizacion").value;
    let monto = parseFloat(document.getElementById("monto").value);
    let plazo = parseInt(document.getElementById("plazo").value);

    if (!creditos[tipo]) {
        alert("Seleccione un tipo de crédito");
        return;
    }

    let data = creditos[tipo];

    if (monto < data.montoMin || monto > data.montoMax) {
        alert(`Monto entre $${data.montoMin} y $${data.montoMax}`);
        return;
    }

    if (plazo < data.plazoMin || plazo > data.plazoMax) {
        alert(`Plazo entre ${data.plazoMin} y ${data.plazoMax} meses`);
        return;
    }

    let interes = data.tasa / 100 / 12;

    let cuota = 0;
    let total = 0;

    // Sistema Francés
    if (amortizacion === "francesa") {
        cuota = (monto * interes) / (1 - Math.pow(1 + interes, -plazo));
        total = cuota * plazo;
    }

    // Sistema Alemán
    if (amortizacion === "alemana") {
        let amortizacionCapital = monto / plazo;
        let saldo = monto;
        let sumaCuotas = 0;

        for (let i = 0; i < plazo; i++) {
            let interesMes = saldo * interes;
            let cuotaMes = amortizacionCapital + interesMes;
            sumaCuotas += cuotaMes;
            saldo -= amortizacionCapital;
        }

        cuota = monto / plazo + (monto * interes);
        total = sumaCuotas;
    }

    document.getElementById("cuota").innerText = "$" + cuota.toFixed(2);
    document.getElementById("total").innerText = "$" + total.toFixed(2);
}


/* ===================== INVERSION ===================== */
document.addEventListener("DOMContentLoaded", function() {
    // 1. Capturar los elementos de la interfaz
    const btnPlazos = document.querySelectorAll('.btn-fast-plazo');
    const selectPlazo = document.getElementById('invPlazo');
    const inputMonto = document.getElementById('invMonto');
    const inputTasa = document.getElementById('invTasa');

    // 2. Escuchar los clics en los botones de plazo rápido (6, 12, 24... meses)
    btnPlazos.forEach(btn => {
        btn.addEventListener('click', function() {
            // Alternar clases visuales de los botones
            btnPlazos.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // Sincronizar el valor con el select oculto/visible
            const meses = this.getAttribute('data-months');
            selectPlazo.value = meses;

            // Calcular inmediatamente
            calcularInversion();
        });
    });

    // 3. Escuchar cambios manuales en los inputs para que sea interactivo
    if (selectPlazo) selectPlazo.addEventListener('change', function() {
        // Sincronizar el botón rápido si el usuario cambia el select manualmente
        btnPlazos.forEach(b => {
            b.classList.toggle('active', b.getAttribute('data-months') === this.value);
        });
        calcularInversion();
    });

    if (inputMonto) inputMonto.addEventListener('input', calcularInversion);
    if (inputTasa) inputTasa.addEventListener('input', calcularInversion);
    
    // 4. Ejecutar un cálculo inicial al cargar la página por primera vez
    calcularInversion();
});
function calcularInversion() {
// Obtener los valores actuales de los inputs
    let monto = parseFloat(document.getElementById("invMonto").value);
    let plazo = parseInt(document.getElementById("invPlazo").value);
    let tasaOriginal = parseFloat(document.getElementById("invTasa").value);

    // Validaciones de control por seguridad
    if (isNaN(monto) || isNaN(plazo) || isNaN(tasaOriginal) || monto <= 0 || plazo <= 0 || tasaOriginal <= 0) {
        // Si los datos están vacíos o erróneos, reseteamos los paneles a 0 sin romper el sistema
        document.getElementById("invMontoBase").innerText = "$0.00";
        document.getElementById("invGanancia").innerText = "$0.00";
        document.getElementById("invResultado").innerText = "$0.00";
        return; 
    }

    // Actualizar etiquetas informativas de la parte inferior de la tarjeta
    document.getElementById("resumenTasa").innerText = tasaOriginal.toFixed(2) + "%";
    document.getElementById("resumenPlazo").innerText = plazo + " meses";
    document.getElementById("invMontoBase").innerText = "$" + monto.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});

    /* FÓRMULA FINANCIERA REAL (D.P.F.):
       Ganancia = Monto Invertido * (Tasa Anual / 100) * (Meses del Plazo / 12)
    */
    let tasaAnualDecimal = tasaOriginal / 100;
    let ganancia = monto * tasaAnualDecimal * (plazo / 12);
    let montoFinal = monto + ganancia;

    // Disparar las animaciones con los valores calculados exactos
    animarValor("invGanancia", ganancia);
    animarValor("invResultado", montoFinal);
}


/* ===================== ANIMACION ===================== */
function animarValor(id, valorFinal) {

    let elemento = document.getElementById(id);
    let actual = 0;
    let incremento = valorFinal / 40;

    let intervalo = setInterval(() => {

        actual += incremento;

        if (actual >= valorFinal) {
            actual = valorFinal;
            clearInterval(intervalo);
        }

        elemento.innerText = "$" + actual.toFixed(2);

    }, 20);
}

function toggleInfo() {
  const content = document.getElementById("extraInfo");
  const btn = event.target;

  content.classList.toggle("active");

  btn.innerText = content.classList.contains("active")
    ? "Ver menos"
    : "Ver más";
}

/**
 * Inicializa el carrusel de logos institucionales (SEPS, COSEDE, UAFE)
 * utilizando la librería Owl Carousel.
 */
function initRegulatorCarousel() {
    const $carousel = $(".vendor-carousel");

    if ($carousel.length > 0) {
        $carousel.owlCarousel({
            loop: true,
            margin: 45,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000, // Tiempo de espera entre transiciones
            smartSpeed: 1000,      // Velocidad del movimiento
            responsive: {
                0: { 
                    items: 2 
                },
                576: { 
                    items: 3 
                },
                768: { 
                    items: 4 
                }
            }
        });
    }
}

// Llamada a la función cuando el documento está listo
$(document).ready(function() {
    initRegulatorCarousel();
});

document.addEventListener('DOMContentLoaded', function() {
    const dataHitos = [
            {
        year: '2007',
        title: 'Constitución Legal',
        desc: 'La Cooperativa de Ahorro y Crédito Pujilí Ltda. obtiene su personería jurídica mediante acuerdo ministerial.',
        icon: 'fa-scale-balanced',
        pos: '0%',
        loc: 'Pujilí, Cotopaxi'
    },

    {
        year: '2009',
        title: 'Inicio de Operaciones',
        desc: 'La Cooperativa inicia oficialmente sus actividades de intermediación financiera el 10 de marzo de 2009.',
        icon: 'fa-university',
        pos: '14%',
        loc: 'Pujilí, Ecuador'
    },

    {
        year: '2012',
        title: 'Agencia Latacunga',
        desc: 'Se inaugura la primera agencia fuera del cantón Pujilí, fortaleciendo la presencia institucional en Cotopaxi.',
        icon: 'fa-building-columns',
        pos: '28%',
        loc: 'Latacunga, Cotopaxi'
    },

    {
        year: '2016',
        title: 'Agencia Salcedo',
        desc: 'La Cooperativa continúa su expansión regional con la apertura de la agencia Salcedo.',
        icon: 'fa-building',
        pos: '42%',
        loc: 'Salcedo, Cotopaxi'
    },

    {
        year: '2021',
        title: 'Agencia La Maná',
        desc: 'Se apertura la agencia La Maná con el objetivo de acercar servicios financieros a más comunidades.',
        icon: 'fa-map-location-dot',
        pos: '56%',
        loc: 'La Maná, Cotopaxi'
    },

    {
        year: '2023',
        title: 'Agencia Quito Sur',
        desc: 'La Cooperativa amplía su cobertura hacia la ciudad de Quito fortaleciendo su crecimiento institucional.',
        icon: 'fa-city',
        pos: '70%',
        loc: 'Quito Sur, Pichincha'
    },

    {
        year: '2024',
        title: 'Agencia Píllaro',
        desc: 'Se inaugura una nueva agencia en el cantón Píllaro impulsando la inclusión financiera regional.',
        icon: 'fa-building-circle-check',
        pos: '84%',
        loc: 'Píllaro, Tungurahua'
    },

    {
        year: '2025',
        title: 'Transformación e Innovación',
        desc: 'La Cooperativa fortalece sus servicios digitales, seguridad financiera y atención tecnológica para sus socios.',
        icon: 'fa-award',
        pos: '100%',
        loc: 'Pujilí, Ecuador'
    }

    ];

    let current = 0;
    let autoTimer;

    function moveHito(idx) {
        const h = dataHitos[idx];
        const card = document.getElementById('mainHitoCard');

        // Animación suave
        card.style.opacity = '0';
        card.style.transform = 'translateY(15px)';

        setTimeout(() => {
            document.getElementById('labelYear').innerText = h.year;
            document.getElementById('labelTitle').innerText = h.title;
            document.getElementById('labelDesc').innerText = h.desc;
            document.getElementById('labelLoc').innerText = h.loc;
            document.getElementById('labelIcon').className = `fa ${h.icon} text-warning`;
            document.getElementById('progressLine').style.width = h.pos;
            document.getElementById('movingMarker').style.left = h.pos;

            // Actualizar botones y barras
            document.querySelectorAll('.btn-year-capsule').forEach((b, i) => b.classList.toggle('active', i === idx));
            document.querySelectorAll('.track-dot').forEach((d, i) => d.classList.toggle('active', i === idx));
            document.querySelectorAll('.p-bar').forEach((p, i) => p.classList.toggle('active', i === idx));

            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 350);
    }

    function runAuto() {
        autoTimer = setInterval(() => {
            current = (current + 1) % dataHitos.length;
            moveHito(current);
        }, 5000);
    }

    function resetTimer() {
        clearInterval(autoTimer);
        runAuto();
    }

    // Interacción manual
    document.querySelectorAll('.btn-year-capsule').forEach(btn => {
        btn.addEventListener('click', function() {
            current = parseInt(this.getAttribute('data-idx'));
            moveHito(current);
            resetTimer();
        });
    });

    document.getElementById('btnNext').addEventListener('click', () => {
        current = (current + 1) % dataHitos.length;
        moveHito(current);
        resetTimer();
    });

    document.getElementById('btnPrev').addEventListener('click', () => {
        current = (current - 1 + dataHitos.length) % dataHitos.length;
        moveHito(current);
        resetTimer();
    });

    runAuto(); // Iniciar carrusel automático
});


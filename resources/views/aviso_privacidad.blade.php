@extends('layouts.base')
<!-- HEADER -->
 @section('meta_title', 'Aviso de Privacidad de datos')
@section('meta_description', $slider->meta_description)
@section('meta_keywords', $slider->meta_keywords)
@section('content')


    <div class="container-fluid bg-primary py-5 bg-header" style="background-image: url('{{ $slider
        ? asset('uploads/sliders/' . $slider->imagen)
        : asset('img/Recurso 1.png') }}');" ">
            </div>

    <div class="container-fluid py-1 ">
        <div class="row">

            <!-- MENU -->
            <div class="col-lg-3">
                <div class="sidebar card p-3 shadow-sm">
                    <h6 class="fw-bold">CONTENIDO</h6>

                    <a href="#sec1">1. Responsable</a>
                    <a href="#sec2">2. Alcance</a>
                    <a href="#sec3">3. Datos</a>
                    <a href="#sec4">4. Origen</a>
                    <a href="#sec5">5. Finalidades</a>
                    <a href="#sec6">6. Base legal</a>
                    <a href="#sec7">7. Transferencias</a>
                    <a href="#sec8">8. Conservación</a>
                    <a href="#sec9">9. Seguridad</a>
                    <a href="#sec10">10. Derechos</a>
                    <a href="#sec11">11. Obligatorio</a>
                    <a href="#sec12">12. Menores</a>
                    <a href="#sec13">13. Bases datos</a>
                    <a href="#sec14">14. Transferencias</a>
                    <a href="#sec15">15. Marketing</a>
                    <a href="#sec16">16. Consentimiento</a>
                    <a href="#sec17">17. Procedimiento</a>
                    <a href="#sec18">18. Videovigilancia</a>
                    <a href="#sec19">19. Principios</a>
                    <a href="#sec20">20. Políticas</a>
                    <a href="#sec21">21. Actualizaciones</a>
                    <a href="#sec22">22. Contacto</a>

                </div>
            </div>

            <!-- CONTENIDO -->
            <div class="col-lg-9">

                @php
                    $card = "card card-legal p-4 shadow-sm mb-4 wow fadeInUp";
                @endphp

                <!-- 1 -->
                <section id="sec1">
                    <div class="{{$card}}">
                        <h4 class="text-warning">1) ¿Quién trata tus datos?</h4>

                        <p>Responsable del tratamiento: COOPERATIVA DE AHORRO Y CRÉDITO PUJILÍ (“COAC PUJILÍ”)</p>

                        <p>Domicilio: Belisario Quevedo y Antonio José de Sucre, Matriz Pujilí, Ecuador</p>

                        <p>Teléfono: (+593) 32 140 566</p>

                        <p>Correo: datos-personales@cooperativapujili.fin.ec</p>

                        <p>Delegado de Protección de Datos (DPO): mismo domicilio y contacto.</p>
                    </div>
                </section>

                <!-- 2 -->
                <section id="sec2">
                    <div class="{{$card}}">
                        <h4 class="text-warning">2) ¿A quién aplica este Aviso?</h4>

                        <p>Este Aviso aplica a todas las personas naturales cuyos datos tratamos en el marco de nuestras
                            actividades financieras y operativas, incluyendo: socios, clientes, clientes externos,
                            postulantes,
                            colaboradores, excolaboradores, proveedores, directivos, visitantes de nuestras instalaciones y
                            cualquier tercero relacionado. También incluye a quienes solicitan información o interactúan con
                            nuestros sitios web, chats, formularios, encuestas, campañas y canales de servicio. </p>
                    </div>
                </section>

                <!-- 3 -->
                <section id="sec3">
                    <div class="{{$card}}">
                        <h4 class="text-warning">3) ¿Qué datos tratamos?</h4>

                        <p>Los datos que tratamos pueden variar según tu relación con COAC PUJILÍ y el producto/servicio
                            solicitado. De manera no limitativa:</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Identificación y contacto: nombres, cédula/pasaporte, lugar/fecha de
                                nacimiento, dirección, teléfono, correo y firma.</li>

                            <li class="list-group-item">Datos económicos y financieros: ingresos, egresos, comportamiento de
                                pago, productos contratados, historial crediticio y de ahorro.</li>

                            <li class="list-group-item">Datos de riesgo crediticio y circunstancias familiares (cuando
                                corresponda al análisis de capacidad de pago).</li>

                            <li class="list-group-item">Imágenes y grabaciones de videovigilancia en instalaciones (CCTV).
                            </li>

                            <li class="list-group-item">Datos de menores de edad (excepcionalmente, con controles reforzados
                                y consentimiento del representante legal cuando aplique).</li>
                        </ul>




                        <p>Minimización: Solo recolectamos lo estrictamente necesario para las finalidades indicadas y
                            conforme a los principios de la LOPDP y su Reglamento. </p>

                    </div>
                </section>

                <!-- 4 -->
                <section id="sec4">
                    <div class="{{$card}}">
                        <h4 class="text-warning">4) ¿De dónde obtenemos tus datos?</h4>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Directamente de ti (en agencia, web, chat, formulario, llamadas,
                                correo, encuestas).</li>

                            <li class="list-group-item">De fuentes públicas y registros de acceso público (por ejemplo,
                                registros públicos y normativa aplicable).</li>

                            <li class="list-group-item">De terceros autorizados: burós de crédito, entidades financieras,
                                Agencia Nacional de Tránsito y proveedores de servicios (mensajería, recaudación), con
                                sustento legal o contractual.</li>
                        </ul>
                    </div>
                </section>

                <!-- 5 -->
                <section id="sec5">
                    <div class="{{$card}}">
                        <h4 class="text-warning">5) Finalidades del tratamiento</h4>

                        <div class="mb-4">
                            <h5 class="text-warning">5.1 Socios, clientes y clientes externos</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Apertura y administración de cuentas, productos de ahorro y
                                    crédito, pólizas y canales electrónicos; ejecución y cumplimiento de contratos.</li>

                                <li class="list-group-item">Atención y servicio: gestión de solicitudes, Peticiones, Quejas,
                                    Reclamos y Sugerencias, notificaciones transaccionales, recordatorios y comunicaciones
                                    operativas.</li>

                                <li class="list-group-item">Evaluación y gestión de riesgo: análisis crediticio y
                                    perfilamiento, comportamiento y cobranza; afinamiento de estrategias de fidelización,
                                    recobro y educación financiera.</li>

                                <li class="list-group-item">Prevención de delitos: debida diligencia “Conozca a su Cliente
                                    (KYC)”, prevención de lavado de activos y financiamiento de delitos, cumplimiento de
                                    obligaciones legales ante autoridades competentes.</li>

                                <li class="list-group-item">Obligaciones regulatorias: reportes a Superintendencias y otros
                                    entes de control conforme la normativa aplicable (p. ej., SEPS).</li>

                                <li class="list-group-item">Mejora de servicios y experiencia de usuario (incluye encuestas,
                                    medición de calidad, analítica operacional).</li>

                                <li class="list-group-item">Comunicaciones comerciales sobre productos/beneficios de COAC
                                    PUJILÍ (cuando exista base de licitud adecuada y mecanismos de baja).</li>

                                <li class="list-group-item">Seguridad de la información y continuidad del negocio: monitoreo
                                    de seguridad lógica y física, respaldo y recuperación ante incidentes.</li>
                            </ul>
                        </div>

                        <div class="mb-4">
                            <h5 class="text-warning">5.2 Acceso a instalaciones, vigilancia y seguridad</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Control e identificación de visitantes y colaboradores.</li>

                                <li class="list-group-item">Videovigilancia (CCTV) en áreas sensibles (cajas, bóvedas,
                                    archivos, oficinas administrativas).</li>

                                <li class="list-group-item">Gestión de incidentes y resguardo de evidencias cuando exista
                                    requerimiento judicial o administrativo.</li>
                            </ul>
                        </div>

                        <div class="alert alert-light border">
                            <strong>Tratamientos ulteriores compatibles:</strong>
                            Podemos realizar análisis para mejorar productos y servicios, desarrollar propuestas de valor,
                            educación financiera o analítica operativa, respetando siempre los principios de
                            proporcionalidad y salvaguardas adecuadas.
                        </div>
                    </div>
                </section>

                <!-- 6 -->
                <section id="sec6">
                    <div class="{{$card}}">
                        <h4 class="text-warning">6) Base de licitud</h4>

                        <p>
                            Tratamos datos personales conforme a las bases de licitud previstas en la LOPDP:
                        </p>

                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">Consentimiento del titular para finalidades específicas.</li>

                            <li class="list-group-item">Cumplimiento de obligaciones legales y requerimientos de
                                autoridades.</li>

                            <li class="list-group-item">Ejecución de medidas precontractuales o cumplimiento de contratos.
                            </li>

                            <li class="list-group-item">Interés público conforme a la normativa vigente.</li>

                            <li class="list-group-item">Interés legítimo del responsable o terceros, sin afectar derechos
                                del titular.</li>

                            <li class="list-group-item">Uso de datos provenientes de fuentes de acceso público permitidas
                                por la ley.</li>
                        </ul>

                        <p>
                            Cuando el tratamiento requiera consentimiento, este será obtenido de forma previa, expresa,
                            informada e inequívoca,
                            conservando evidencia de su otorgamiento.
                        </p>

                        <div class="alert alert-light border mt-3">
                            <strong>Revocatoria del consentimiento:</strong>
                            El titular puede revocar su consentimiento en cualquier momento sin efectos retroactivos,
                            escribiendo a
                            <strong>datos-personales@cooperativapujili.fin.ec</strong>
                            o mediante los mecanismos establecidos en la
                            <a href="#sec10" class="fw-bold text-decoration-none text-warning">Sección 10: Derechos de los
                                titulares</a>.
                        </div>
                    </div>
                </section>

                <!-- 7 -->
                <section id="sec7">
                    <div class="{{$card}}">
                        <h4 class="text-warning">7) Transferencias</h4>

                        <p>
                            Tus datos personales solo podrán ser comunicados o transferidos en los siguientes casos:
                        </p>

                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">
                                Entes de control y autoridades competentes: Superintendencias, organismos judiciales o
                                administrativos, cuando exista competencia legal para requerirlos.
                            </li>

                            <li class="list-group-item">
                                Entidades financieras, de recaudación y proveedores de servicios (mensajería, soporte
                                tecnológico, call center, auditoría externa y actuarios), así como socios de negocio
                                necesarios para el cumplimiento de las finalidades, bajo acuerdos de confidencialidad y
                                protección de datos.
                            </li>

                            <li class="list-group-item">
                                Burós de crédito y fuentes autorizadas, para el análisis, evaluación y administración del
                                riesgo crediticio.
                            </li>
                        </ul>

                        <div class="alert alert-light border">
                            <strong>Transferencias internacionales:</strong>
                            No realizamos transferencias internacionales de datos de forma general. En caso de ser
                            necesarias en el futuro, te lo informaremos previamente y aplicaremos las garantías exigidas por
                            la LOPDP.
                        </div>
                    </div>
                </section>

                <!-- 8 -->
                <section id="sec8">
                    <div class="{{$card}}">
                        <h4 class="text-warning">8) Conservación</h4>

                        <p>
                            Conservamos tus datos personales únicamente durante el tiempo necesario para cumplir con las
                            finalidades para las cuales fueron recopilados,
                            así como por los plazos adicionales exigidos por la normativa aplicable, obligaciones legales,
                            requerimientos regulatorios o defensa de COAC PUJILÍ.
                        </p>

                        <p class="fw-bold">Plazos referenciales de conservación:</p>

                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">
                                Clientes y socios: datos de identificación y contacto se conservan durante la vigencia de la
                                relación contractual y hasta 10 años posteriores.
                            </li>

                            <li class="list-group-item">
                                Información financiera y crediticia: se conserva durante la vigencia del crédito y hasta 15
                                años posteriores, para fines de auditoría, cumplimiento y defensa legal.
                            </li>

                            <li class="list-group-item">
                                Videovigilancia (CCTV): conservación máxima de 90 días, salvo requerimiento legal, judicial
                                o administrativo que exija un plazo mayor.
                            </li>
                        </ul>

                        <div class="alert alert-light border">
                            <strong>Eliminación de datos:</strong>
                            Una vez cumplidos los plazos o finalidades, los datos serán eliminados o anonimizados mediante
                            procesos seguros que impidan su recuperación o uso indebido.
                        </div>
                    </div>
                </section>

                <!-- 9 -->
                <section id="sec9">
                    <div class="{{$card}}">
                        <h4 class="text-warning">9) ¿Cómo protegemos tu información? (Seguridad y ciberseguridad)</h4>


                        <p>
                            Implementamos medidas organizativas, técnicas, jurídicas y de control alineadas con las mejores
                            prácticas de la industria,
                            incluyendo estándares como <strong>ISO/IEC 27001</strong> e <strong>ISO/IEC 27701</strong>,
                            gestión de riesgos, controles de acceso,
                            autenticación robusta, cifrado de datos en tránsito y en reposo cuando corresponde, registro y
                            monitoreo de eventos,
                            segregación de funciones, pruebas de vulnerabilidades, copias de respaldo, planes de continuidad
                            del negocio,
                            gestión de incidentes y capacitación permanente a nuestro personal.
                        </p>

                        <p>
                            Asimismo, exigimos a proveedores y terceros que acceden a datos personales o sistemas de COAC
                            PUJILÍ el cumplimiento de
                            medidas de seguridad equivalentes, mediante obligaciones contractuales de confidencialidad y
                            protección de la información.
                        </p>

                        <div class="alert alert-warning">
                            <strong>Tu corresponsabilidad:</strong>
                            También es importante tu participación en la protección de la información.
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Mantener la confidencialidad de tus credenciales de acceso.</li>
                            <li class="list-group-item">Usar dispositivos actualizados y protegidos contra amenazas.</li>
                            <li class="list-group-item">No compartir contraseñas ni datos de acceso.</li>
                            <li class="list-group-item">Verificar que accedes únicamente a canales oficiales de COAC PUJILÍ.
                            </li>
                            <li class="list-group-item">Reportar inmediatamente cualquier actividad sospechosa a nuestros
                                canales oficiales.</li>
                        </ul>
                    </div>
                </section>

                <!-- 10 -->
                <section id="sec10">
                    <div class="{{$card}}">
                        <h4 class="text-warning">10) ¿Cuáles son tus derechos y cómo ejercerlos?</h4>


                        <p>
                            De conformidad con la LOPDP, tienes los siguientes derechos sobre tus datos personales:
                        </p>

                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">
                                <strong>Información y acceso:</strong> conocer el tratamiento de tus datos, finalidades,
                                destinatarios, plazos y fuentes.
                            </li>

                            <li class="list-group-item">
                                <strong>Rectificación o actualización:</strong> corregir datos inexactos, incompletos o
                                desactualizados.
                            </li>

                            <li class="list-group-item">
                                <strong>Limitación:</strong> restringir el tratamiento en los casos permitidos por la ley.
                            </li>

                            <li class="list-group-item">
                                <strong>Eliminación:</strong> solicitar la supresión de datos cuando corresponda legalmente.
                            </li>

                            <li class="list-group-item">
                                <strong>Oposición:</strong> oponerte al tratamiento, salvo que existan motivos legítimos
                                imperiosos o defensa de reclamaciones.
                            </li>

                            <li class="list-group-item">
                                <strong>Portabilidad:</strong> recibir tus datos en formato estructurado (XML, Excel u otros
                                compatibles).
                            </li>

                            <li class="list-group-item">
                                <strong>Decisiones automatizadas:</strong> no ser objeto de decisiones automatizadas con
                                efectos significativos, salvo excepciones legales.
                            </li>
                        </ul>

                        <div class="mt-3">
                            <h6 class="text-dark">Canales para derechos ARCO+</h6>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">📧 Correo: datos-personales@cooperativapujili.fin.ec</li>
                                <li class="list-group-item">📞 Teléfono: (+593) 32 140 566</li>
                                <li class="list-group-item">📝 Formulario: Solicitud para Ejercicio de Derechos del Titular
                                    (colocar enlace)</li>
                            </ul>
                        </div>

                        <div class="alert alert-info mt-3">
                            <strong>Plazos de respuesta:</strong> hasta 15 días, con posibilidad de ampliación de 5 días
                            adicionales según la normativa.
                        </div>

                        <div class="alert alert-warning">
                            <strong>Excepciones:</strong> el ejercicio de derechos puede limitarse por obligaciones legales,
                            contractuales, orden de autoridad o protección de derechos de terceros.
                        </div>

                        <p>
                            <strong>Autoridad de control:</strong>
                            puedes acudir a la Superintendencia de Protección de Datos Personales (SPDP)
                            <a href="https://www.spdp.gob.ec" target="_blank">www.spdp.gob.ec</a>
                            si consideras que no hemos atendido adecuadamente tu solicitud.
                        </p>
                    </div>
                </section>

                <!-- 11-22 (resumido pero completo base legal real) -->

                <section id="sec11">
                    <div class="{{$card}}">
                        <h4 class="text-warning">11) ¿Es obligatorio facilitarnos tus datos?</h4>
                        <p>
                            Para la celebración, ejecución y administración de contratos de ahorro y crédito, es necesario
                            que nos proporciones determinados datos personales.
                        </p>

                        <div class="alert alert-light border">
                            En caso de no proporcionar los datos requeridos, o si estos resultan incorrectos, inexactos o
                            incompletos, no será posible prestar el servicio solicitado o este podrá ser suspendido, en
                            cumplimiento de obligaciones legales, regulatorias y de seguridad aplicables a COAC PUJILÍ.
                        </div>
                    </div>
                </section>

                <section id="sec13">
                    <div class="{{$card}}">
                        <h4 class="text-warning">12) ¿Es obligatorio facilitarnos tus datos? Bases de datos y control de
                            accesos</h4>
                        <div class="mb-3">
                            <h6 class="text-dark fw-bold">Menores de edad</h6>
                            <p>
                                Cuando el tratamiento de datos personales involucre a menores de edad, se requerirá el
                                consentimiento de su representante legal,
                                conforme a la normativa vigente y respetando en todo momento el interés superior del menor.
                            </p>

                            <p>
                                Los adolescentes entre 15 y 18 años podrán ejercer sus derechos a través de su representante
                                legal o apoderado, según corresponda.
                            </p>
                        </div>

                        <div class="mb-3">
                            <h6 class="text-dark fw-bold">Decisiones automatizadas y perfiles</h6>
                            <p>
                                Cuando se utilicen modelos, reglas o herramientas automatizadas para apoyar la toma de
                                decisiones
                                (por ejemplo, análisis crediticio o scoring), garantizamos los siguientes derechos:
                            </p>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Acceder a información sobre la lógica aplicada en la decisión.
                                </li>
                                <li class="list-group-item">Solicitar explicaciones claras sobre el resultado obtenido.</li>
                                <li class="list-group-item">Presentar observaciones o impugnaciones.</li>
                                <li class="list-group-item">Conocer los criterios utilizados en el proceso de evaluación.
                                </li>
                            </ul>
                        </div>

                        <div class="alert alert-light border mt-3">
                            Estas disposiciones no aplican cuando la decisión sea necesaria para la ejecución de un
                            contrato, esté autorizada por la ley con salvaguardas adecuadas,
                            medie consentimiento explícito del titular o no genere impactos significativos en sus derechos.
                        </div>
                    </div>
                </section>

                <section id="sec13">
                    <div class="{{$card}}">
                        <h4 class="text-warning">13) Bases de datos y control de accesos</h4>
                        <p>
                            Nuestras bases de datos se alimentan de las plataformas de captación (web y físicas), procesos
                            precontractuales y contractuales,
                            comunicación con proveedores o entidades autorizadas, burós de crédito y fuentes públicas
                            habilitadas conforme a la normativa vigente.
                        </p>

                        <p class="fw-bold">Medidas de seguridad implementadas:</p>

                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">
                                Control estricto de accesos mediante personal autorizado, autenticación robusta, registro de
                                actividades y segregación de funciones.
                            </li>

                            <li class="list-group-item">
                                Seguridad física en instalaciones y centros de datos, con sistemas de monitoreo, protección
                                y respaldo de la información.
                            </li>

                            <li class="list-group-item">
                                Conservación, retención y eliminación segura de datos conforme a los plazos establecidos y
                                la normativa aplicable.
                            </li>
                        </ul>
                    </div>
                </section>
                <section id="sec14">
                    <div class="{{$card}}">
                        <h4 class="text-warning">14) Transferencias y comunicaciones de dato</h4>
                        <div class="mb-3">
                            <h6 class="fw-bold text-dark">Transferencias nacionales</h6>
                            <p>
                                Realizamos comunicaciones a entidades bancarias, empresas de recaudación, proveedores de TI,
                                auditores externos/actuarios, entes de control, burós de crédito y otros terceros
                                estrictamente necesarios para finalidades legítimas, bajo contratos de confidencialidad y
                                cláusulas de protección
                            </p>

                        </div>

                        <div class="mb-3">
                            <h6 class="fw-bold text-dark">Transferencias internacionales</h6>
                            <p>
                                No realizamos de forma generalizada. Si fueran necesarias (p. ej., servicios en nube fuera
                                del país), te informaremos y aplicaremos garantías acorde a la LOPDP (cláusulas tipo,
                                evaluación de impacto, medidas suplementarias).
                            </p>
                        </div>


                    </div>
                </section>

                <section id="sec15">
                    <div class="{{$card}}">
                        <h4 class="text-warning">15) Marketing responsable y canales de contacto</h4>
                        <p>
                            Podemos enviar comunicaciones comerciales sobre productos/servicios de COAC PUJILÍ cuando
                            tengamos base de licitud (p. ej., consentimiento o interés legítimo en condiciones permitidas).
                            Siempre podrás optar por no recibir (opt out) mediante enlace de baja en cada mensaje, ajustes
                            en tu perfil o escribiendo a datos-personales@cooperativapujili.fin.ec. Respetamos tus
                            preferencias y mantenemos listas de exclusión.
                        </p>


                    </div>
                </section>

                <section id="sec16">
                    <div class="{{$card}}">
                        <h4 class="text-warning">16) ¿Qué pasa si no otorgas tu consentimiento o lo revocas?</h4>
                        <p>
                            Cuando el tratamiento no se base en consentimiento (p. ej., obligación legal o contrato),
                            continuaremos tratándolo conforme a la ley. Cuando el tratamiento sí requiera consentimiento,
                            podrás revocarlo sin efectos retroactivos. En algunos casos, la falta o revocatoria puede
                            impedir la prestación o continuidad de un servicio (p. ej., comunicaciones no esenciales). </p>
                        </p>

                    </div>
                </section>
                <section id="sec17">
                    <div class="{{$card}}">
                        <h4 class="text-warning">17) Procedimiento para ejercer derechos (paso a paso)</h4>
                        <ol class="list-group list-group-numbered mb-3">
                            <li class="list-group-item">Presenta la solicitud (acceso, información, rectificación,
                                actualización, inclusión, supresión/cancelación, oposición, portabilidad) indicando datos de
                                contacto, tu relación con COAC PUJILÍ y la pretensión concreta.</li>

                            <li class="list-group-item">Adjunta la documentación que sustente tu pedido (cuando aplique).
                            </li>

                            <li class="list-group-item">Envíala a datos-personales@cooperativapujili.fin.ec o preséntala en
                                nuestras agencias (puedes usar el Formulario para Ejercicio de Derechos).</li>

                            <li class="list-group-item">Recibirás respuesta en un máximo de 15 días, con posibilidad de
                                solicitar aclaratoria o ampliación por 5 días adicionales según Reglamento.</li>

                            <li class="list-group-item">Si no estás conforme, puedes acudir a la SPDP.</li>
                        </ol>

                    </div>
                </section>
                <section id="sec18">
                    <div class="{{$card}}">
                        <h4 class="text-warning">18) ) Videovigilancia, control de accesos y registros</h4>
                        <p>
                            Usamos CCTV en nuestras instalaciones para fines de seguridad y gestión de incidentes. Las
                            imágenes/grabaciones se conservan máximo 90 días, salvo que exista requerimiento o investigación
                            en curso. Restringimos el acceso a personal autorizado y aplicamos borrado seguro al vencer el
                            plazo o la finalidad.
                        </p>

                    </div>
                </section>

                <section id="sec19">
                    <div class="{{$card}}">
                        <h4 class="text-warning">19) Principios que guían nuestro tratamiento</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Juridicidad, lealtad y transparencia: tratamos de forma lícita,
                                clara y honesta.</li>

                            <li class="list-group-item">Finalidad y minimización: recolectamos solo lo necesario para fines
                                específicos.</li>

                            <li class="list-group-item">Proporcionalidad y calidad: evitamos excesos; procuramos que los
                                datos sean exactos y actualizados.</li>

                            <li class="list-group-item">Seguridad y confidencialidad: protegemos contra acceso, uso o
                                divulgación no autorizada.</li>

                            <li class="list-group-item">Conservación: por plazos adecuados; eliminación segura cuando
                                corresponda.</li>

                            <li class="list-group-item">Responsabilidad proactiva: implementamos medidas y evidencias de
                                cumplimiento.</li>

                            <li class="list-group-item">Aplicación favorable al titular en caso de duda.</li>
                        </ul>

                    </div>
                </section>

  <section id="sec20">
                    <div class="{{$card}}">
                        <h4 class="text-warning">20) Relación con otras políticas y documentos</h4>
                        <p>
        Este Aviso se complementa con nuestra Política de Protección de Datos Personales y Privacidad de la Información,
        así como con políticas internas de seguridad de la información, continuidad de negocio, gestión de incidentes,
        ciberseguridad, antifraude y con lineamientos regulatorios aplicables al sistema financiero popular y solidario.
        En caso de discrepancia, prevalecerá la norma de mayor protección al titular.
    </p>

                    </div>
                </section>

                  <section id="sec21">
                    <div class="{{$card}}">
                        <h4 class="text-warning">21) Actualizaciones del Aviso</h4>
                        <p>
        Podemos modificar o actualizar este Aviso para reflejar cambios en prácticas de tratamiento, nuevas obligaciones legales o mejoras de seguridad. Publicaremos la versión vigente en nuestra página web y, cuando el cambio sea sustancial, te lo comunicaremos por nuestros canales. Continúa usando nuestros servicios solo si aceptas la versión actualizada (cuando el consentimiento sea la base de licitud, podremos solicitarlo nuevamente).  
    </p>

                    </div>
                </section>
<section id="sec22">
                    <div class="{{$card}}">
                        <h4 class="text-warning">22) Contacto</h4>
               <p>
Para cualquier consulta, ejercicio de derechos, reclamo o sugerencia sobre cómo tratamos tu información personal, contáctanos por:
</p>

<ul>
    <li>Correo: datos-personales@cooperativapujili.fin.ec</li>
    <li>Teléfono: (+593) 32 140 566</li>
    <li>Dirección: Belisario Quevedo y Antonio José de Sucre, Matriz Pujilí, Ecuador.</li>
</ul>

<p>
También puedes contactar a nuestro Delegado de Protección de Datos al mismo correo electrónico.
</p>

                    </div>
                </section>

            </div>
        </div>
    </div>

    <script>
        window.addEventListener("scroll", function () {
            let sections = document.querySelectorAll("section");
            let links = document.querySelectorAll(".sidebar a");

            sections.forEach(sec => {
                let top = window.scrollY;
                let offset = sec.offsetTop - 150;
                let height = sec.offsetHeight;
                let id = sec.getAttribute("id");

                if (top >= offset && top < offset + height) {
                    links.forEach(l => l.classList.remove("active"));
                    document.querySelector(".sidebar a[href='#" + id + "']").classList.add("active");
                }
            });
        });
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .sidebar {
            position: sticky;
            top: 90px;
        }

        .sidebar a {
            display: block;
            padding: 8px 10px;
            border-left: 3px solid transparent;
            color: #555;
            text-decoration: none;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #f8f9fa;
            color: #000;
        }

        .sidebar a.active {
            border-left: 3px solid #ffc107;
            font-weight: bold;
            color: #000;
        }

        .card-legal {
            border: none;
            border-radius: 12px;
            transition: 0.3s;
        }

        .card-legal:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
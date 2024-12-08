const cuerpoTabla = document.getElementById('cuerpo-tabla')

cuerpoTabla.innerHTML = `
    <tr>
                      <td>1</td>
                      <td>Falta de comunicación entre los equipos</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>General</td>
                      <td>La falta de comunicación genera malentendidos, duplicación de esfuerzos y
                        errores en la coordinación, lo que afecta la productividad y los plazos.</td>
                      <td>Implementar reuniones regulares con herramientas como Slack o Microsoft Teams y
                        definir roles claros para evitar confusiones. Establecer un protocolo para el
                        flujo de información.</td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>Errores en el software por falta de pruebas</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Software</td>
                      <td>Los errores no detectados pueden derivar en fallos críticos en producción,
                        afectando la experiencia del usuario y la reputación del equipo.</td>
                      <td>Crear un plan de pruebas exhaustivo que incluya pruebas unitarias, de
                        integración y de usuario antes del despliegue. Automatizar las pruebas cuando
                        sea posible.</td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td>Subir cambios sin revisión adecuada</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Software</td>
                      <td>Los cambios sin revisión pueden provocar conflictos en el código y errores
                        graves, afectando la calidad del producto final.</td>
                      <td>Implementar revisiones de código obligatorias a través de herramientas como
                        GitHub Pull Requests. Establecer políticas claras para la aprobación de cambios.
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Bajo compromiso del equipo</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>Recursos Humanos</td>
                      <td>La falta de compromiso reduce la calidad del trabajo, provoca retrasos en las
                        entregas y afecta la moral del equipo.</td>
                      <td>Fomentar un ambiente de trabajo positivo mediante incentivos, reconocimiento de
                        logros y actividades de integración. Asegurar que los objetivos estén alineados
                        con las expectativas del equipo.</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Problemas con licencias de software</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Software</td>
                      <td>El uso de software no licenciado puede causar interrupciones, problemas legales
                        y retrasos en la entrega del proyecto.</td>
                      <td>Realizar auditorías periódicas para verificar las licencias. Usar software de
                        código abierto o alternativas económicas cuando sea posible.</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Fallos en el sistema de control de versiones</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>Software</td>
                      <td>La falta de control de versiones puede generar pérdida de datos, errores en las
                        integraciones y dificultades para gestionar los cambios.</td>
                      <td>Capacitar al equipo en el uso de herramientas como Git. Configurar copias de
                        seguridad automáticas y establecer un flujo de trabajo estándar.</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Rotura o daño de equipos esenciales</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>Hardware</td>
                      <td>La rotura de equipos puede causar interrupciones en las actividades, afectando
                        plazos y aumentando costos operativos.</td>
                      <td>Contratar seguros para equipos críticos y mantener dispositivos de respaldo
                        disponibles. Programar mantenimientos preventivos regulares.</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Fallas en el sistema de autenticación</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Software</td>
                      <td>Las fallas en la autenticación pueden comprometer la seguridad de los datos y
                        permitir accesos no autorizados al sistema.</td>
                      <td>Implementar autenticación de múltiples factores (MFA) y realizar auditorías
                        periódicas de los sistemas de seguridad.</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Uso de herramientas desactualizadas</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>Software</td>
                      <td>Las herramientas obsoletas pueden limitar la productividad del equipo y generar
                        incompatibilidades técnicas.</td>
                      <td>Realizar actualizaciones periódicas y capacitar al equipo en nuevas
                        herramientas. Evaluar la inversión en herramientas modernas para asegurar
                        compatibilidad y eficiencia.</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Virus o malware en archivos subidos</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Software</td>
                      <td>Los archivos infectados pueden comprometer la integridad del sistema y los datos
                        sensibles de los usuarios.</td>
                      <td>Implementar software antivirus avanzado y realizar análisis automáticos de los
                        archivos subidos. Establecer una política de seguridad para restringir archivos
                        no confiables.</td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Retrasos en la toma de decisiones importantes</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>General</td>
                      <td>La toma tardía de decisiones afecta la capacidad de adaptación y retrasa el
                        progreso del proyecto.</td>
                      <td>Establecer reuniones periódicas con los tomadores de decisiones y delegar
                        responsabilidades claras para reducir los cuellos de botella en la toma de
                        decisiones.</td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>Falta de definición clara de los requisitos del proyecto</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>General</td>
                      <td>La falta de claridad en los requisitos genera malentendidos, lo que puede
                        retrasar el proyecto y afectar la calidad del resultado final.</td>
                      <td>Organizar talleres y reuniones con los stakeholders para definir claramente los
                        requisitos y objetivos del proyecto antes de comenzar.</td>
                    </tr>
                    <tr>
                      <td>13</td>
                      <td>Falta de capacitación en nuevas tecnologías requeridas</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Recursos Humanos</td>
                      <td>La falta de conocimiento sobre las tecnologías necesarias limita el rendimiento
                        del equipo y aumenta el riesgo de errores en el desarrollo.</td>
                      <td>Realizar sesiones de capacitación periódicas sobre nuevas tecnologías, y asignar
                        mentores dentro del equipo para guiar a los miembros menos experimentados.</td>
                    </tr>
                    <tr>
                      <td>14</td>
                      <td>Problemas de conexión a internet</td>
                      <td><span class="risk-badge badge-low">Baja</span></td>
                      <td>General</td>
                      <td>Los problemas de conexión pueden afectar la colaboración, la actualización de
                        sistemas y el trabajo remoto, causando retrasos.</td>
                      <td>Asegurar una infraestructura de red robusta con backups de conexión a internet y
                        tener alternativas para el trabajo sin conexión.</td>
                    </tr>
                    <tr>
                      <td>15</td>
                      <td>Desorganización en la asignación de tareas</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Recursos Humanos</td>
                      <td>La asignación desorganizada de tareas genera confusión y puede resultar en
                        duplicación de esfuerzos y falta de progreso.</td>
                      <td>Implementar herramientas de gestión de proyectos como Trello o Jira, y asignar
                        roles específicos para cada miembro del equipo.</td>
                    </tr>
                    <tr>
                      <td>16</td>
                      <td>Riesgos con problemas de salud de los trabajadores</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>Recursos Humanos</td>
                      <td>Los problemas de salud pueden afectar la disponibilidad y productividad de los
                        empleados.</td>
                      <td>Promover un entorno laboral saludable, con programas de bienestar y evaluaciones
                        médicas periódicas para prevenir problemas graves.</td>
                    </tr>
                    <tr>
                      <td>17</td>
                      <td>Escasez de personal capacitado para liderar proyectos estratégicos</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Recursos Humanos</td>
                      <td>La falta de liderazgo adecuado afecta la dirección del proyecto y la toma de
                        decisiones estratégicas.</td>
                      <td>Invertir en el desarrollo de liderazgo dentro del equipo, capacitar a los
                        miembros en habilidades de gestión y crear una estructura clara de liderazgos.
                      </td>
                    </tr>
                    <tr>
                      <td>18</td>
                      <td>Riesgos de problemas con el servidor</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Hardware</td>
                      <td>Los problemas con el servidor pueden causar caídas del sistema, pérdida de datos
                        y afectar la disponibilidad del servicio.</td>
                      <td>Implementar un sistema de backups regulares, redundancia de servidores y
                        monitoreo constante de la infraestructura de TI.</td>
                    </tr>
                    <tr>
                      <td>19</td>
                      <td>Falta de acceso a herramientas tecnológicas por parte del equipo</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Hardware</td>
                      <td>La falta de acceso adecuado a herramientas tecnológicas puede reducir la
                        productividad y afectar la calidad del trabajo.</td>
                      <td>Asegurar que todos los miembros del equipo tengan acceso a las herramientas
                        necesarias y establecer presupuestos para adquirir nuevas tecnologías.</td>
                    </tr>
                    <tr>
                      <td>20</td>
                      <td>Problemas de puntualidad</td>
                      <td><span class="risk-badge badge-low">Baja</span></td>
                      <td>General</td>
                      <td>La impuntualidad afecta la coordinación de tareas y puede generar retrasos en
                        las entregas.</td>
                      <td>Establecer expectativas claras respecto a los plazos y horarios, y monitorear el
                        desempeño de los miembros del equipo para garantizar que todos cumplan con los
                        tiempos establecidos.</td>
                    </tr>
                    <tr>
                      <td>21</td>
                      <td>Retraso en la entrega de evidencia debido a cambios frecuentes en los
                        requerimientos del cliente</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>General</td>
                      <td>La falta de estabilidad en los requisitos genera incertidumbre, retrasos y
                        recursos mal dirigidos.</td>
                      <td>Establecer un proceso formal para la gestión de cambios en los requisitos y
                        asegurar que cualquier modificación sea aprobada por todas las partes
                        involucradas.</td>
                    </tr>
                    <tr>
                      <td>22</td>
                      <td>Pérdida de datos sensibles debido a la falta de copias de seguridad regulares
                      </td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Software</td>
                      <td>La falta de copias de seguridad puede resultar en la pérdida irreversible de
                        datos críticos para el proyecto.</td>
                      <td>Establecer un protocolo de backups automáticos diarios, y realizar auditorías
                        periódicas para garantizar la integridad de los datos.</td>
                    </tr>
                    <tr>
                      <td>23</td>
                      <td>Retrasos en la entrega de tareas individuales</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>Recursos Humanos</td>
                      <td>Los retrasos individuales afectan el progreso general del proyecto y pueden
                        generar fricciones dentro del equipo.</td>
                      <td>Implementar un sistema de monitoreo de tareas individuales con alertas para
                        plazos próximos y fomentar la colaboración entre los miembros para apoyar el
                        cumplimiento de las tareas.</td>
                    </tr>
                    <tr>
                      <td>24</td>
                      <td>Poca participación en reuniones</td>
                      <td><span class="risk-badge badge-low">Baja</span></td>
                      <td>Recursos Humanos</td>
                      <td>La baja participación en reuniones impide la discusión efectiva y la resolución
                        de problemas en equipo.</td>
                      <td>Fomentar la participación activa durante las reuniones mediante dinámicas
                        interactivas y asegurarse de que todos los miembros tengan voz en las
                        decisiones.</td>
                    </tr>
                    <tr>
                      <td>25</td>
                      <td>Riesgo de limitación económica</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Recursos Financieros</td>
                      <td>La falta de recursos financieros puede limitar el alcance del proyecto y afectar
                        la calidad del producto final.</td>
                      <td>Crear un presupuesto detallado y asegurar la disponibilidad de fondos, buscar
                        patrocinadores o financiamiento adicional si es necesario.</td>
                    </tr>
                    <tr>
                      <td>26</td>
                      <td>Riesgos de incompatibilidad con sistemas operativos</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>Software</td>
                      <td>La incompatibilidad entre sistemas operativos puede generar conflictos en el
                        software y causar problemas durante el desarrollo y pruebas.</td>
                      <td>Realizar pruebas de compatibilidad en diferentes entornos antes del despliegue y
                        garantizar que el software sea adaptable a múltiples plataformas.</td>
                    </tr>
                    <tr>
                      <td>27</td>
                      <td>Pérdida de información confidencial</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>General</td>
                      <td>La filtración de información confidencial pone en riesgo la privacidad de los
                        usuarios y la reputación de la empresa.</td>
                      <td>Implementar medidas de seguridad avanzadas como cifrado de datos y asegurar el
                        acceso restringido a la información sensible.</td>
                    </tr>
                    <tr>
                      <td>28</td>
                      <td>Fallos en el sistema de gestión de tareas</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>Software</td>
                      <td>Los fallos en el sistema de gestión de tareas pueden generar desorganización y
                        afectar la distribución del trabajo.</td>
                      <td>Realizar mantenimientos regulares en el sistema de gestión y asegurar que todos
                        los miembros del equipo estén capacitados en su uso adecuado.</td>
                    </tr>
                    <tr>
                      <td>29</td>
                      <td>Errores humanos durante la ejecución del proyecto</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Recursos Humanos</td>
                      <td>Los errores humanos durante la ejecución pueden llevar a fallos en el proyecto y
                        aumentar los costos operativos.</td>
                      <td>Implementar protocolos de revisión y validación de tareas, y proporcionar
                        formación continua al equipo para reducir los errores.</td>
                    </tr>
                    <tr>
                      <td>30</td>
                      <td>Incertidumbre en el alcance del proyecto</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>General</td>
                      <td>La falta de claridad en el alcance provoca cambios constantes, lo que puede
                        generar retrasos y mal manejo de recursos.</td>
                      <td>Definir un alcance claro desde el inicio y establecer mecanismos de control de
                        cambios para mantener la estabilidad del proyecto.</td>
                    </tr>
                    <tr>
                      <td>31</td>
                      <td>Aumento inesperado de los costos</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Recursos Financieros</td>
                      <td>Los costos adicionales imprevistos pueden afectar el presupuesto y retrasar las
                        actividades del proyecto.</td>
                      <td>Establecer un fondo de contingencia en el presupuesto para cubrir imprevistos y
                        revisar el presupuesto periódicamente.</td>
                    </tr>
                    <tr>
                      <td>32</td>
                      <td>Desalineación entre los objetivos del cliente y del equipo</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>General</td>
                      <td>La desalineación de los objetivos puede generar frustración y desviaciones en el
                        enfoque del proyecto.</td>
                      <td>Realizar reuniones periódicas de alineación entre los stakeholders y el equipo
                        de trabajo para garantizar que todos estén enfocados en los mismos objetivos.
                      </td>
                    </tr>
                    <tr>
                      <td>33</td>
                      <td>Falta de visibilidad en el progreso del proyecto</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>General</td>
                      <td>La falta de visibilidad afecta la gestión del proyecto, dificultando la
                        detección temprana de problemas.</td>
                      <td>Utilizar herramientas de gestión de proyectos que ofrezcan visibilidad en tiempo
                        real del progreso y permitir que todos los miembros del equipo puedan hacer
                        seguimiento.</td>
                    </tr>
                    <tr>
                      <td>34</td>
                      <td>Baja calidad del código debido a falta de revisiones</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Software</td>
                      <td>La falta de revisiones puede generar código de mala calidad, lo que impacta el
                        rendimiento y la escalabilidad del sistema.</td>
                      <td>Establecer revisiones de código como parte del flujo de trabajo de desarrollo y
                        asegurarse de que todos los miembros del equipo comprendan la importancia de
                        escribir código limpio y mantenible.</td>
                    </tr>
                    <tr>
                      <td>35</td>
                      <td>Requerimientos técnicos no claros</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>General</td>
                      <td>La falta de especificación clara en los requisitos técnicos puede generar
                        ambigüedades, errores y retrasos en la ejecución.</td>
                      <td>Crear documentación técnica detallada y realizar revisiones periódicas con los
                        stakeholders para asegurar la correcta interpretación de los requisitos.</td>
                    </tr>
                    <tr>
                      <td>36</td>
                      <td>Conflictos de intereses dentro del equipo</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>Recursos Humanos</td>
                      <td>Los conflictos internos pueden generar tensiones y afectar el rendimiento y la
                        colaboración dentro del equipo.</td>
                      <td>Fomentar una cultura de resolución de conflictos y comunicación abierta, y
                        organizar sesiones de mediación en caso de disputas.</td>
                    </tr>
                    <tr>
                      <td>37</td>
                      <td>Sobrecarga de trabajo por falta de recursos adicionales</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Recursos Humanos</td>
                      <td>La sobrecarga de trabajo puede llevar al agotamiento del equipo y generar
                        errores debido a la falta de tiempo.</td>
                      <td>Evaluar la distribución de tareas, delegar responsabilidades y contratar
                        recursos adicionales si es necesario.</td>
                    </tr>
                    <tr>
                      <td>38</td>
                      <td>Desastres naturales que afecten la operación del proyecto</td>
                      <td><span class="risk-badge badge-low">Baja</span></td>
                      <td>General</td>
                      <td>Los desastres naturales pueden interrumpir las operaciones y dañar la
                        infraestructura, lo que afecta la entrega del proyecto.</td>
                      <td>Tener planes de contingencia para desastres naturales y garantizar la seguridad
                        del personal. Utilizar infraestructura en la nube para asegurar la continuidad
                        del trabajo.</td>
                    </tr>
                    <tr>
                      <td>39</td>
                      <td>Baja retención de clientes debido a la falta de calidad del producto</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Marketing/Producto</td>
                      <td>La falta de calidad o la insatisfacción del cliente puede reducir la retención y
                        afectar la reputación de la empresa.</td>
                      <td>Mejorar la calidad del producto y establecer un sistema de retroalimentación
                        para detectar y solucionar rápidamente problemas de los clientes.</td>
                    </tr>
                    <tr>
                      <td>40</td>
                      <td>Riesgo de dependencia de un solo proveedor</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Proveedores</td>
                      <td>Depender de un solo proveedor puede generar interrupciones en caso de problemas
                        con dicho proveedor.</td>
                      <td>Diversificar proveedores para reducir la dependencia y asegurar una fuente
                        alternativa en caso de interrupciones.</td>
                    </tr>
                    <tr>
                      <td>41</td>
                      <td>Desalineación con la cultura organizacional</td>
                      <td><span class="risk-badge badge-low">Baja</span></td>
                      <td>Recursos Humanos</td>
                      <td>La falta de alineación con la cultura organizacional puede reducir el compromiso
                        y la eficiencia del equipo.</td>
                      <td>Realizar sesiones de integración para promover la cultura organizacional y
                        garantizar que todos los miembros comprendan y se alineen con ella.</td>
                    </tr>
                    <tr>
                      <td>42</td>
                      <td>Inestabilidad en el mercado que afecte el proyecto</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>General</td>
                      <td>Las fluctuaciones del mercado pueden afectar la demanda de productos o servicios
                        y retrasar las decisiones de los stakeholders.</td>
                      <td>Realizar análisis de mercado para anticipar posibles cambios y adaptarse a ellos
                        mediante la diversificación de productos o servicios.</td>
                    </tr>
                    <tr>
                      <td>43</td>
                      <td>Desmotivación por cambios de personal</td>
                      <td><span class="risk-badge badge-low">Baja</span></td>
                      <td>Recursos Humanos</td>
                      <td>La rotación de personal puede afectar la moral del equipo y generar pérdida de
                        conocimiento crítico para el proyecto.</td>
                      <td>Crear programas de retención y desarrollo profesional para mantener a los
                        empleados comprometidos y reducir la rotación.</td>
                    </tr>
                    <tr>
                      <td>44</td>
                      <td>Subestimación de la complejidad técnica del proyecto</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>General</td>
                      <td>La subestimación de la complejidad técnica puede generar sobrecarga de trabajo y
                        problemas en el cumplimiento de plazos.</td>
                      <td>Evaluar cuidadosamente los requerimientos técnicos y contar con expertos para
                        revisar la viabilidad técnica antes de comprometerse con el proyecto.</td>
                    </tr>
                    <tr>
                      <td>45</td>
                      <td>Falta de flexibilidad en el enfoque del proyecto</td>
                      <td><span class="risk-badge badge-medium">Media</span></td>
                      <td>General</td>
                      <td>La rigidez en el enfoque puede generar ineficiencias y limitar la capacidad de
                        adaptación frente a cambios inesperados.</td>
                      <td>Adoptar un enfoque ágil que permita adaptaciones rápidas a los cambios sin
                        comprometer los objetivos del proyecto.</td>
                    </tr>
                    <tr>
                      <td>46</td>
                      <td>Deficiencias en el servicio al cliente</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Marketing/Producto</td>
                      <td>La falta de un servicio al cliente eficiente puede generar insatisfacción y
                        pérdida de clientes.</td>
                      <td>Mejorar los canales de soporte al cliente y ofrecer capacitación continua para
                        el equipo de atención al cliente.</td>
                    </tr>
                    <tr>
                      <td>47</td>
                      <td>Falta de integración entre diferentes sistemas</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Software</td>
                      <td>La falta de integración puede generar pérdidas de información y conflictos entre
                        sistemas que afectan la eficiencia operativa.</td>
                      <td>Implementar APIs y soluciones middleware para garantizar la integración entre
                        sistemas.</td>
                    </tr>
                    <tr>
                      <td>48</td>
                      <td>Desajuste entre el tiempo estimado y el tiempo real de desarrollo</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>General</td>
                      <td>La discrepancia entre el tiempo estimado y el tiempo real de desarrollo puede
                        generar frustración y retrasos.</td>
                      <td>Establecer estimaciones realistas basadas en experiencias previas y realizar un
                        seguimiento continuo de los plazos y el progreso del proyecto.</td>
                    </tr>
                    <tr>
                      <td>49</td>
                      <td>Desacuerdo con el modelo de negocio</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>General</td>
                      <td>Los desacuerdos sobre el modelo de negocio pueden generar conflicto entre los
                        stakeholders y afectar la ejecución del proyecto.</td>
                      <td>Realizar reuniones de alineación estratégica para asegurar que todas las partes
                        estén de acuerdo con el modelo de negocio y los objetivos a largo plazo.</td>
                    </tr>
                    <tr>
                      <td>50</td>
                      <td>Pérdida de confianza de los clientes debido a retrasos</td>
                      <td><span class="risk-badge badge-high">Alta</span></td>
                      <td>Marketing/Producto</td>
                      <td>La falta de cumplimiento de los plazos de entrega puede afectar la reputación de
                        la empresa y la confianza de los clientes.</td>
                      <td>Implementar un sistema de comunicación transparente con los clientes para
                        gestionar expectativas y asegurar que se cumplan los plazos establecidos.</td>
                    </tr>

`
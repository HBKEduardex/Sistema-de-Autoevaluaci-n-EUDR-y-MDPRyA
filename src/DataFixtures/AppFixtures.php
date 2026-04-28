<?php

namespace App\DataFixtures;

use App\Modules\Organizations\Organization;
use App\Modules\Users\User;
use App\Modules\Compliance\ComplianceIndicator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // 1. Crear Usuario Administrador
        $admin = new User();
        $admin->setEmail('admin@siexco.gob.bo');
        $admin->setRoles(['ROLE_ADMIN']);
        $hashedPassword = $this->passwordHasher->hashPassword($admin, 'admin123');
        $admin->setPassword($hashedPassword);
        $manager->persist($admin);

        // 2. Crear Usuario Evaluador
        $evaluator = new User();
        $evaluator->setEmail('evaluador@siexco.gob.bo');
        $evaluator->setRoles(['ROLE_EVALUATOR']);
        $evaluator->setPassword($this->passwordHasher->hashPassword($evaluator, 'eval123'));
        $manager->persist($evaluator);

        // 3. Crear Organización de Prueba
        $org = new Organization();
        $org->setName('Maderera Demo S.A.');
        $org->setTaxId('1020304050');
        $org->setType('Productor');
        $manager->persist($org);

        $manager->persist($org);

        // 4. Sembrar Indicadores EUDR EXACTOS (Herramienta 1)
        $indicators = [
            // ÁREA 1: CAPACIDAD ORGANIZATIVA
            ['1. Capacidad Organizativa', 'La organización/empresa cuenta con información verificable que demuestre que los productos relevantes (café / cacao) están libres de deforestación, conforme al Sistema de Diligencia Debida (SDD).', "1. Base de datos o registros oficiales que demuestren la no deforestación posterior al 31 de diciembre de 2020 en cada parcela.\n2. Registro actualizado de superficie cultivada o plantación por parcela.\n3. Registro de áreas de bosque nativo, cuando corresponda.", 1],
            ['1. Capacidad Organizativa', 'La organización/empresa dispone de una política interna que garantice la legalidad del uso del suelo en sus operaciones, como respaldo de que no afectan a terceros.', "1. Evidencias legales como títulos de propiedad (INRA), contratos, escrituras o permisos que acrediten el derecho de uso del suelo de las parcelas de producción.\n2. Evidencia de que las operaciones no afectan derechos de terceros sobre la tierra - terreno.", 2],
            ['1. Capacidad Organizativa', 'La organización/empresa cuenta con una política ambiental que garantice la protección del medio ambiente.', "Registros o políticas que acrediten:\n1. Cumplimiento de vedas forestales;\n2. Acciones de conservación ambiental (ejem. SAFs);\n3. Gestión responsable de residuos orgánicos\nPara parcelas dentro de áreas protegidas o reservas:\n4. Cumplimiento normativa ambiental: Plan de Manejo forestal y/o Plan de gestión de bosques y tierras (ABT)", 3],
            ['1. Capacidad Organizativa', 'La organización/empresa cuenta con políticas y procedimientos que el respeto de los derechos humanos y aseguren el cumplimiento de los derechos laborales.', "1. Evidencias del cumplimiento de la legislación laboral nacional: contratos, planillas, seguridad ocupacional.\n2. Reportes de inspecciones laborales o auditorías externas.\n3. Declaraciones institucionales sobre edad mínima de empleo.\n4. Declaración de cumplimiento de la aplicación de los convenios de la OIT.\n5. Declaratoria sobre el cumplimiento de los derechos de los pueblos indígenas, reconocido en la Constitución Política del Estado artículo 352, si corresponde (Consulta Previa Libre e Informada).", 4],
            ['1. Capacidad Organizativa', 'La organización/empresa cuenta con políticas internas que aseguren la legalidad fiscal, comercial y aduanera, así como buenas prácticas empresariales.', "1. Inscripción en el padrón tributario (NIT)\n2. Registro RUEX\n3. Registros SENASAG\n4. Evidencia documental de políticas internas anticorrupción, y buenas prácticas empresariales", 5],
            ['1. Capacidad Organizativa', 'La organización/empresa ha designado un responsable del cumplimiento del EUDR a nivel directivo.', "1. Documento oficial de nombramiento del responsable de cumplimiento del EUDR\n2. Descripción de funciones, responsabilidades y autoridad dentro de la estructura organizacional.", 6],

            // ÁREA 2: DISPONIBILIDAD DE LA INFORMACIÓN
            ['2. Disponibilidad de la Información', 'La organización/empresa ha recopilado, organizado la información requerida por el Sistema de Diligencia Debida (SDD)', "1. Nombre comercial y tipo de producto pertinente.\n2. Descripción detallada del producto y de los insumos empleados en su elaboración.\n3. Registro actualizado de producción: masa neta (kg), volumen o número de unidades.", 1],
            ['2. Disponibilidad de la Información', 'Información previa y posterior, dentro de la cadena. La información debe ser actualizada de la persona o la empresa que suministra la materia prima, así como del cliente a quien se entrega el producto.', "1. Nombre completo y número de identificación (cédula o NIT).\n2. Número telefónico y/o celular, dirección física y/o postal.\n3. Dirección de correo electrónico.", 2],
            ['2. Disponibilidad de la Información', 'La organización/empresa ha incorporado información precisa sobre el país y la localidad de producción de las materias primas, incluyendo 5 indicadores', "1. País de producción.\n2. Departamento.\n3. Provincia.\n4. Municipio.\n5. Comunidad o localidad específica de producción.", 3],
            ['2. Disponibilidad de la Información', 'La organización/empresa dispone de la geolocalización donde se produjeron las materias primas (café / cacao), de acuerdo con los requisitos del EUDR.', "1. Coordenadas GPS (para parcelas < 4 ha) o polígonos georreferenciados (para ≥ 4 ha) en formato GeoJSON, sistema WGS84 con seis decimales de todas las parcelas.\n2. Fechas o intervalos de producción de las materias primas.\nCuando se recurre a múltiples parcelas, para completar un lote de producción, se debe garantizar la geolocalización de todas las parcelas involucradas.", 4],
            ['2. Disponibilidad de la Información', 'Garantiza la conservación de la información (física y digital) por un período mínimo de cinco (5) años desde la introducción de los productos pertinentes en la UE.', "1. Se cuenta con un área física para custodiar y conservar los documentos físicos en buen estado\n2. Sistema digital, servidor para custodiar la información electrónica.\n3. Procedimientos para garantizar disponibilidad ante auditorias o requerimientos de autoridades europeas", 5],

            // ÁREA 3: CAPACIDAD DE AUTOEVALUACIÓN
            ['3. Capacidad de Autoevaluación', 'Identificación del nivel de riesgo país conforme al EUDR.', "1. Conoce el sistema de 'benchmarking' de riesgo de la Comisión Europea\n2. Comprensión de las implicaciones de la clasificación del riesgo país asignado a Bolivia conforme al EUDR.", 1],
            ['3. Capacidad de Autoevaluación', 'Uso de información complementaria y sistemas de verificación externos.', "1. Disponibilidad de sistemas de certificación o verificación de terceros (p. ej. Orgánico, Comercio Justo, Rainforest Alliance).\n2. Existencia de sistema de trazabilidad interno actualizado.\n3. Disponibilidad de informes, auditorías o verificaciones independientes sobre el cumplimiento de los requisitos del EUDR.", 2],
            ['3. Capacidad de Autoevaluación', 'Riesgo de mezcla con productos de origen no conforme.', "1. Comprobar la existencia o ausencia de segregación física de balance de masas de los productos pertinentes.\n2. Aplicación de mecanismos de trazabilidad que coadyuban a la segregación física o aplicación de balance de masas.\n3. Registro de entradas y salidas que compruebe la integridad del producto conforme.", 3],
            ['3. Capacidad de Autoevaluación', 'Actualización periódica de las evaluaciones de riesgo.', "1. Evaluaciones de riesgo documentadas y revisadas de forma anual.\n2. Incorporación de nueva información (data) geoespacial, legal y socioambiental\n3. Registro de cambios y acciones basadas en los resultados de la revisión", 4],

            // ÁREA 4: MEDIDAS PARA MINIMIZAR EL RIESGO
            ['4. Medidas para Minimizar el Riesgo', 'Existencia de políticas, y procedimientos internos para la gestión del riesgo.', "1. Manual interno de cumplimiento EUDR o políticas institucionales alineadas al SDD.\n2. Procedimientos formales para verificar la calidad, consistencia y veracidad de datos y documentos recibidos.\n3. Procedimientos de control para la verificación de la información geoespacial y legal de cada parcela/proveedor.\n4. Sistema documentado de administración del riesgo, con roles y responsabilidades claramente asignadas.", 1],
            ['4. Medidas para Minimizar el Riesgo', 'Evidencia de las acciones correctivas', "1. Procedimientos para suspender temporalmente a proveedores cuya documentación sea insuficiente o inconsistente.\n2. Procedimientos para excluir proveedores cuando se confirme deforestación o incumplimiento legal.\n3. Registros documentados de acciones correctivas aplicadas a proveedores o unidades productivas.\n4. Evidencia de acompañamiento o asistencia técnica a productores para levantar o corregir observaciones.", 2],
            ['4. Medidas para Minimizar el Riesgo', 'Registro documentado de decisiones sobre minimización del riesgo', "1. Actas, informes o minutas donde se documente cómo se identificó el riesgo y qué decisión se tomó.\n2. Registros que demuestren que el riesgo residual fue reducido a nivel nulo o despreciable.\n3. Validación formal por parte del responsable del EUDR antes de emitir la Declaración de Diligencia Debida.\n4. Archivo organizado y recuperable del proceso de mitigación del riesgo por al menos cinco años.\n5. Documento que confirma que no existen riesgos no mitigados firmada por el responsable de cumplimiento EUDR.", 3],
        ];

        foreach ($indicators as $data) {
            $ind = new ComplianceIndicator();
            $ind->setArea($data[0]);
            $ind->setCriterion($data[1]);
            $ind->setName($data[2]);
            $ind->setOrderNumber($data[3]);
            $manager->persist($ind);
        }

        $manager->flush();
    }
}

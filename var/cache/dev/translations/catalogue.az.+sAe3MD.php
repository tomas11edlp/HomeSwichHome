<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('az', array (
  'validators' => 
  array (
    'This value should be false.' => 'Bu dəyər false olmalıdır.',
    'This value should be true.' => 'Bu dəyər true olmalıdır.',
    'This value should be of type {{ type }}.' => 'Bu dəyərin tipi {{ type }} olmalıdır.',
    'This value should be blank.' => 'Bu dəyər boş olmalıdır.',
    'The value you selected is not a valid choice.' => 'Seçdiyiniz dəyər düzgün bir seçim değil.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Ən az {{ limit }} seçim qeyd edilməlidir.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Ən çox {{ limit }} seçim qeyd edilməlidir.',
    'One or more of the given values is invalid.' => 'Təqdim edilən dəyərlərdən bir və ya bir neçəsi yanlışdır.',
    'This field was not expected.' => 'Bu sahə gözlənilmirdi.',
    'This field is missing.' => 'Bu sahə əksikdir.',
    'This value is not a valid date.' => 'Bu dəyər düzgün bir tarix deyil.',
    'This value is not a valid datetime.' => 'Bu dəyər düzgün bir tarixsaat deyil.',
    'This value is not a valid email address.' => 'Bu dəyər düzgün bir e-poçt adresi deyil.',
    'The file could not be found.' => 'Fayl tapılmadı.',
    'The file is not readable.' => 'Fayl oxunabilən deyil.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl çox böyükdür ({{ size }} {{ suffix }}). İcazə verilən maksimum fayl ölçüsü {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faylın mime tipi yanlışdr ({{ type }}). İcazə verilən mime tipləri {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Bu dəyər {{ limit }} və ya altında olmalıdır.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Bu dəyər çox uzundur. {{ limit }} və ya daha az simvol olmalıdır.',
    'This value should be {{ limit }} or more.' => 'Bu dəyər {{ limit }} veya daha fazla olmalıdır.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Bu dəyər çox qısadır. {{ limit }} və ya daha çox simvol olmalıdır.',
    'This value should not be blank.' => 'Bu dəyər boş olmamalıdır.',
    'This value should not be null.' => 'Bu dəyər boş olmamalıdır.',
    'This value should be null.' => 'Bu dəyər boş olmamalıdır.',
    'This value is not valid.' => 'Bu dəyər doğru deyil.',
    'This value is not a valid time.' => 'Bu dəyər doğru bir saat deyil.',
    'This value is not a valid URL.' => 'Bu dəyər doğru bir URL değil.',
    'The two values should be equal.' => 'İki dəyər eyni olmalıdır.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl çox böyükdür. İcazə verilən ən böyük fayl ölçüsü {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fayl çox böyükdür.',
    'The file could not be uploaded.' => 'Fayl yüklənəbilmir.',
    'This value should be a valid number.' => 'Bu dəyər rəqəm olmalıdır.',
    'This file is not a valid image.' => 'Bu fayl düzgün bir şəkil deyil.',
    'This is not a valid IP address.' => 'Bu düzgün bir IP adresi deyil.',
    'This value is not a valid language.' => 'Bu dəyər düzgün bir dil deyil.',
    'This value is not a valid locale.' => 'Bu dəyər düzgün bir dil deyil.',
    'This value is not a valid country.' => 'Bu dəyər düzgün bir ölkə deyil.',
    'This value is already used.' => 'Bu dəyər hal-hazırda istifadədədir.',
    'The size of the image could not be detected.' => 'Şəklin ölçüsü hesablana bilmir.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Şəklin genişliyi çox böyükdür ({{ width }}px). İcazə verilən ən böyük genişlik {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Şəklin genişliyi çox kiçikdir ({{ width }}px). Ən az {{ min_width }}px olmalıdır.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Şəklin yüksəkliyi çox böyükdür ({{ height }}px). İcazə verilən ən böyük yüksəklik {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Şəklin yüksəkliyi çox kiçikdir ({{ height }}px). Ən az {{ min_height }}px olmalıdır.',
    'This value should be the user\'s current password.' => 'Bu dəyər istifadəçinin hazırkı parolu olmalıdır.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Bu dəyər tam olaraq {{ limit }} simvol olmaldır.',
    'The file was only partially uploaded.' => 'Fayl qismən yükləndi.',
    'No file was uploaded.' => 'Fayl yüklənmədi.',
    'No temporary folder was configured in php.ini.' => 'php.ini\'də müvəqqəti qovluq quraşdırılmayıb.',
    'Cannot write temporary file to disk.' => 'Müvəqqəti fayl diskə yazıla bilmir.',
    'A PHP extension caused the upload to fail.' => 'Bir PHP əlavəsi faylın yüklənməsinə mane oldu.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bu kolleksiyada {{ limit }} və ya daha çox element olmalıdır.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bu kolleksiyada {{ limit }} və ya daha az element olmalıdır.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bu kolleksiyada tam olaraq {{ limit }} element olmalıdır.',
    'Invalid card number.' => 'Yanlış kart nömrəsi.',
    'Unsupported card type or invalid card number.' => 'Dəstəklənməyən kart tipi və ya yanlış kart nömrəsi.',
    'This form should not contain extra fields.' => 'Bu formada əlavə sahə olmamalıdır.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Yüklənən fayl çox böyükdür. Lütfən daha kiçik fayl yükləyin.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF nişanı yanlışdır. Lütfen formanı yenidən göndərin.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Doğrulama istisnası baş verdi.',
    'Authentication credentials could not be found.' => 'Doğrulama məlumatları tapılmadı.',
    'Authentication request could not be processed due to a system problem.' => 'Sistem xətası səbəbilə doğrulama istəyi emal edilə bilmədi.',
    'Invalid credentials.' => 'Yanlış məlumat.',
    'Cookie has already been used by someone else.' => 'Kuki başqası tərəfindən istifadə edilib.',
    'Not privileged to request the resource.' => 'Resurs istəyi üçün imtiyaz yoxdur.',
    'Invalid CSRF token.' => 'Yanlış CSRF nişanı.',
    'Digest nonce has expired.' => 'Dərləmə istifadə müddəti bitib.',
    'No authentication provider found to support the authentication token.' => 'Doğrulama nişanını dəstəkləyəcək provayder tapılmadı.',
    'No session available, it either timed out or cookies are not enabled.' => 'Uyğun seans yoxdur, vaxtı keçib və ya kuki aktiv deyil.',
    'No token could be found.' => 'Nişan tapılmadı.',
    'Username could not be found.' => 'İstifadəçi adı tapılmadı.',
    'Account has expired.' => 'Hesabın istifadə müddəti bitib.',
    'Credentials have expired.' => 'Məlumatların istifadə müddəti bitib.',
    'Account is disabled.' => 'Hesab qeyri-aktiv edilib.',
    'Account is locked.' => 'Hesab kilitlənib.',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Este valor no es un UUID válido.',
    'This value should be a multiple of {{ compared_value }}.' => 'Este valor debería ser múltiplo de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Este Código de Identificación Bancaria (BIC) no está asociado con el IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Este valor debería ser un JSON válido.',
    'This collection should contain only unique elements.' => 'Esta colección debería tener exclusivamente elementos únicos.',
    'This value should be positive.' => 'Este valor debería ser positivo.',
    'This value should be either positive or zero.' => 'Este valor debería ser positivo o igual a cero.',
    'This value should be negative.' => 'Este valor debería ser negativo.',
    'This value should be either negative or zero.' => 'Este valor debería ser negativo o igual a cero.',
    'This value is not a valid timezone.' => 'Este valor no es una zona horaria válida.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Esta contraseña no se puede utilizar porque está incluida en un listado de contraseñas públicas obtenido gracias a fallos de seguridad de otros sitios y aplicaciones. Por favor utilice otra contraseña.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'messages' => 
  array (
    'Actions' => 'Acciones',
    'Ascending' => 'Ascendente',
    'Cancel' => 'Cancelar',
    'Clean' => 'Limpiar',
    'Descending' => 'Descendente',
    'Download' => 'Descargar',
    'First page' => 'Primer página',
    'Last page' => 'Última página',
    'Next page' => 'Siguiente página',
    'No data' => 'No hay datos para mostrar',
    'of' => 'de',
    'Previous page' => 'Página anterior',
    'Search filters' => 'Filtros de búsqueda',
    'Search' => 'Buscar',
    'Select' => 'Seleccione',
    'Selected' => 'Seleccionados',
    'Sort' => 'Ordenar',
    'Total' => 'Total',
    'You must select at least one item' => 'Debe seleccionar al menos un item',
    'pgform.labels.page' => 'Página',
    'pgform.labels.rows' => 'Mostrar',
    'pgform.labels.order' => 'Orden',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;

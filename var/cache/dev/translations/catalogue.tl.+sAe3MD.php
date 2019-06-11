<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ang halaga nito ay dapat na huwad.',
    'This value should be true.' => 'Ang halaga nito ay dapat totoo.',
    'This value should be of type {{ type }}.' => 'Ang halaga nito ay dapat sa uri {{ type }}.',
    'This value should be blank.' => 'Ang halaga nito ay dapat walang laman.',
    'The value you selected is not a valid choice.' => 'Ang halaga ng iyong pinili ay hindi balidong pagpili.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Kailangan mong pumili ng pinakamababang {{ limit }} ng pagpilian.|Kailangan mong pumili ng pinakamababang {{ limit }} ng mga pagpipilian.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Kailangan mong pumili ng pinakamataas {{ limit }} ng pagpipilian.|Kailangan mong pumili ng pinakamataas {{ limit }} ng mga pagpipilian.',
    'One or more of the given values is invalid.' => 'Isa o higit pang mga halaga na binigay ay hindi balido.',
    'This field was not expected.' => 'Ang larangang ito ay hindi inaasahan.',
    'This field is missing.' => 'Ang patlang na ito ay nawawala.',
    'This value is not a valid date.' => 'Ang halagang ito ay hindi balidong petsa.',
    'This value is not a valid datetime.' => 'Ang halagang ito ay hindi wastong petsa/oras.',
    'This value is not a valid email address.' => 'Ang halagang ito ay hindi balidong address ng email.',
    'The file could not be found.' => 'Ang file na ito ay hindi makita.',
    'The file is not readable.' => 'Ang file na ito ay hindi mabasa.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ang file na ito ay masyadong malaki ({{ size }} {{ suffix }}). Ang pinakamalaking sukat {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Ang uri ng file ng mime ay hindi balido ({{ type }}).Ang mga pinapayagang uri ng mime ay ang  {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ang halaga nito ay dapat na {{ limit }} or maliit pa.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ang halaga nito ay masyadong mahaba.Ito ay dapat na {{ limit }} karakter o maliit pa.|Ang halaga nito ay masyadong mahaba. Ito ay dapat na {{ limit }} mga karakter o maliit pa.',
    'This value should be {{ limit }} or more.' => 'Ang halaga nito ay dapat na {{ limit }} o mas marami pa.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ang halaga nito ay masyadong maliit. Ito ay dapat na {{ limit }} karakter o marami pa.|Ang halaga nito ay masyadong maliit. Ito ay dapat na {{ limit }} mga karakter o marami pa.',
    'This value should not be blank.' => 'Ang halaga na ito ay dapat na may laman.',
    'This value should not be null.' => 'Meron dapt itong halaga.',
    'This value should be null.' => 'Wala dapat itong halaga.',
    'This value is not valid.' => 'Hindi balido ang halagang ito.',
    'This value is not a valid time.' => 'Ang halagang ito ay hindi wastong oras.',
    'This value is not a valid URL.' => 'Hindi ito isang balidong URL.',
    'The two values should be equal.' => 'Ang dalwang halaga ay dapat magkapareha.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ang file ay masyadong malaki. Ang pinapayagan halaga lamang ay {{ limit}} {{ suffix }}.',
    'The file is too large.' => 'Ang file na ito ay masyadong malaki.',
    'The file could not be uploaded.' => 'Ang file na ito ay hindi ma-upload.',
    'This value should be a valid number.' => 'Ang halaga nito ay dapat na wastong numero.',
    'This file is not a valid image.' => 'Ang file na ito ay hindi wastong imahe.',
    'This is not a valid IP address.' => 'Ito ay hindi wastong IP address.',
    'This value is not a valid language.' => 'Ang halaga na ito ay hindi balidong wika.',
    'This value is not a valid locale.' => 'Ito ay isang hindi wastong locale na halaga.',
    'This value is not a valid country.' => 'ng halaga na ito ay hindi wastong bansa.',
    'This value is already used.' => 'Ang halaga na ito ay ginamit na.',
    'The size of the image could not be detected.' => 'Ang sukat ng imahe ay hindi madetect.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ang lapad ng imahe ay masyadong malaki ({{ width }}px). Ang pinapayagang lapay ay {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ang lapad ng imahe ay masyadong maliit ({{ width }}px). Ang pinakamaliit na pinapayagang lapad ay {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Ang haba ng imahe ay masyadong mataas ({{ height }}px). Ang pinakmataas na haba ay {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Ang haba ng imahe ay masyadong maliit ({{ height }}px). Ang inaasahang haba ay {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ang halagang ito ay dapat na password ng kasalukuyang gumagamit.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ang halagang ito ay dapat na eksakto sa {{ limit}} karakter.|Ang halagang ito ay dapat na eksakto sa {{ limit }} mga karakter.',
    'The file was only partially uploaded.' => 'Ang file na ito ay kahalating na upload lamang.',
    'No file was uploaded.' => 'Walang na upload na file.',
    'No temporary folder was configured in php.ini.' => 'Walang temporaryong folder ang naayos sa php.ini.',
    'Cannot write temporary file to disk.' => 'Temporaryong hindi  makasulat ng file sa disk.',
    'A PHP extension caused the upload to fail.' => 'Ang dahilan ng pagkabigo ng pagupload ng files ay isang extension ng PHP.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} elemento o marami pa.|Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} mga elemento o marami pa.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} elemento o maliit pa.|Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} mga elemento o maliit pa.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ang koleksyong ito ay magkaroon ng eksaktong {{ limit }} elemento.|Ang koleksyong ito ay magkaroon ng eksaktong {{ limit }} mga elemento.',
    'Invalid card number.' => 'Hindi wastong numero ng kard.',
    'Unsupported card type or invalid card number.' => 'Hindi supportadong uri ng kard o hindi wastong numero ng kard.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ito ay hindi isang balidong International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ang halagang ito ay hindi balidong SBN-10.',
    'This value is not a valid ISBN-13.' => 'Ang halagang ito ay hindi balidong ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ang halagang ito ay pwdeng isang balidong ISBN-10 o isang balidong ISBN-13.',
    'This value is not a valid ISSN.' => 'Ang halangang ito ay hindi isang balidong ISSN.',
    'This value is not a valid currency.' => 'Ang halagang ito ay hindi balidong pera.',
    'This value should be equal to {{ compared_value }}.' => 'Ito ay hindi dapat magkapareho sa {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ang halagang ito ay dapat tataas sa {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ang halagang ito ay dapat mas mataas o magkapareha sa {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ang halagang ito ay dapat kapareha ng {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ang halagang ito ay dapat mas maliit sa {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ang halagang ito ay dapat mas mmaliit o magkapareha sa {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ang halagang ito ay hindi dapat magkapareha sa {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ang halagang ito ay hindi dapat magkapareha sa {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Ang ratio ng imahe ay masyadong malaki ({{ ratio }}). Ang pinakamalaking ratio ay {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'ng ratio ng imahe ay masyadong maliit ({{ ratio }}). Ang pinamaliit na ratio ay {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Ang imahe ay kwadrado ({{ width }}x{{ height }}px). Ang mga kwadradong imahe ay hindi pwede.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Ang orientasyon ng imahe ay nakalandscape ({{ width }}x{{ height }}px). Ang mga imaheng nakalandscape ang orientasyon ay hindi pwede.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Ang orientasyon ng imahe ay nakaportrait ({{ width }}x{{ height }}px). PAng mga imaheng nakaportrait ang orientasyon ay hindi pwede.',
    'An empty file is not allowed.' => 'Ang file na walang laman ay hindi pwede.',
    'The host could not be resolved.' => 'Hindi maresolba ang host.',
    'This value does not match the expected {{ charset }} charset.' => 'Ang halaga ay hindi kapareha sa inaasahang {{ charset }} set ng karater.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ito ay hindi isang balidong Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Ito ay hindi wastong UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Ang halagang ito ay dapat multiple ng {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ang Business Identifier Code (BIC) na ito ay walang kaugnayan sa IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Ang halagang ito ay dapat naka wastong JSON.',
    'This collection should contain only unique elements.' => 'Ang mga elemento ng koleksyong ito ay dapat magkakaiba.',
    'This value should be positive.' => 'Ang halagang ito ay dapat positibo.',
    'This value should be either positive or zero.' => 'Ang halagang ito ay dapat positibo o zero.',
    'This value should be negative.' => 'Ang halagang ito ay dapat negatibo.',
    'This value should be either negative or zero.' => 'Ang halagang ito ay dapat negatibo o zero.',
    'This value is not a valid timezone.' => 'Ang halagang ito ay hindi wastong timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Naikalat ang password na ito sa isang data breach at hindi na dapat gamitin. Mangyaring gumamit ng ibang pang password.',
    'This form should not contain extra fields.' => 'Ang pormang itong ay hindi dapat magkarron ng dagdag na mga patlang.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Ang ini-upload na file ay masyadong malaki. Pakiulit muling mag-upload ng mas maliit na file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Hindi balido ang CSRF token. Maagpasa muli ng isang pang porma.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Isang pambihirang pagpaptunay ang nangyari.',
    'Authentication credentials could not be found.' => 'Hindi mahanap ang mga kinakailangan na dokumento para sa pagpapatunay.',
    'Authentication request could not be processed due to a system problem.' => 'Hindi maproseso ang iyong hiling dahil may problema sa sistema.',
    'Invalid credentials.' => 'Hindi balidong mga dokumento.',
    'Cookie has already been used by someone else.' => 'Ang Cookie ay ginamit na ng ibang tao.',
    'Not privileged to request the resource.' => 'Walang pribilehiyo upang humingi ng mga bagong mapagkukunan.',
    'Invalid CSRF token.' => 'Hindi balidong mga token ng CSRF.',
    'Digest nonce has expired.' => 'Na-expire na ang Digest nonce.',
    'No authentication provider found to support the authentication token.' => 'Walang nakitang nagbibibagay ng suporta sa token ng pagpapatunay.',
    'No session available, it either timed out or cookies are not enabled.' => 'Walang sesyon ng magagamit, ito ay nawalan ng oras o hindi pinagana.',
    'No token could be found.' => 'Walang token na nahanap.',
    'Username could not be found.' => 'Walang username na makita.',
    'Account has expired.' => 'Ang akawnt ay nag-expire na.',
    'Credentials have expired.' => '.ng mga kinakailangang dokumento ay nag expire na.',
    'Account is disabled.' => 'Ang akawnt ay hindi pinagana.',
    'Account is locked.' => 'ng akawnt ay nakasara.',
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

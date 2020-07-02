# unique-id-generator
Unique ID generator using openssl

### Composer ###

`composer install advancedideasmechanics/unique-id-generator`

#### Stand-Alone ####

`require('./vendor/autoload.php');`

#### Call ####

`use Advancedideasmechanics\Uniqueisgenerator\UniqueidService;`

`$uniqueIdService = new UniqueidService();`

`$uniqueId = $uniqueIdService->getId(16);`

This will return an alphnumeric id. Minimum of 16 characters.

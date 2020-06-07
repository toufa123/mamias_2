<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'mamias/2020';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'behat/transliterator' => 'v1.3.0@3c4ec1d77c3d05caa1f0bf8fb3aae4845005c7fc',
  'cocur/slugify' => 'v4.0.0@3f1ffc300f164f23abe8b64ffb3f92d35cec8307',
  'creof/doctrine2-spatial' => '1.2.0@58ea5fae1c1b450ee08d7dac25cd9e8f5e6fdebd',
  'creof/geo-parser' => '2.2.1@b55553a54c7775576c9ee629847973d0b6d7cbed',
  'creof/wkb-parser' => 'v2.3.0@1ddb69da8cc90607dd528fd9992ef1fc10cc8839',
  'creof/wkt-parser' => '2.2.0@bc4c051b7a4e99b4943e2ec358218ed200aa991e',
  'doctrine/annotations' => '1.10.3@5db60a4969eba0e0c197a19c077780aadbc43c5d',
  'doctrine/cache' => '1.10.1@35a4a70cd94e09e2259dfae7488afc6b474ecbd3',
  'doctrine/collections' => '1.6.5@fc0206348e17e530d09463fef07ba8968406cd6d',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '1.12.10@2ee4c25a847e744e93d7fc2895e059ad9ef7d10c',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'excelwebzone/recaptcha-bundle' => 'v1.5.18@21fea6daaa8b9a4782b2144a63a1e16da25ac519',
  'friendsofsymfony/ckeditor-bundle' => '1.2.0@7d428b16154a7136e1dd4c11062573afa1bfb3df',
  'friendsofsymfony/user-bundle' => 'v2.1.2@1049935edd24ec305cc6cfde1875372fa9600446',
  'gedmo/doctrine-extensions' => 'v2.4.41@e55a6727052f91834a968937c93b6fb193be8fb6',
  'google/recaptcha' => '1.2.4@614f25a9038be4f3f2da7cbfd778dc5b357d2419',
  'guzzlehttp/guzzle' => '6.5.4@a4a1b6930528a8f7ee03518e6442ec7a44155d9d',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'helios-ag/fm-elfinder-bundle' => '10.0.4@334dbd43623d34c962c2e9607565babede2e917a',
  'hoa/compiler' => '3.17.08.08@aa09caf0bf28adae6654ca6ee415ee2f522672de',
  'hoa/consistency' => '1.17.05.02@fd7d0adc82410507f332516faf655b6ed22e4c2f',
  'hoa/event' => '1.17.01.13@6c0060dced212ffa3af0e34bb46624f990b29c54',
  'hoa/exception' => '1.17.01.16@091727d46420a3d7468ef0595651488bfc3a458f',
  'hoa/file' => '1.17.07.11@35cb979b779bc54918d2f9a4e02ed6c7a1fa67ca',
  'hoa/iterator' => '2.17.01.10@d1120ba09cb4ccd049c86d10058ab94af245f0cc',
  'hoa/math' => '1.17.05.16@7150785d30f5d565704912116a462e9f5bc83a0c',
  'hoa/protocol' => '1.17.01.14@5c2cf972151c45f373230da170ea015deecf19e2',
  'hoa/regex' => '1.17.01.13@7e263a61b6fb45c1d03d8e5ef77668518abd5bec',
  'hoa/stream' => '1.17.02.21@3293cfffca2de10525df51436adf88a559151d82',
  'hoa/ustring' => '4.17.01.16@e6326e2739178799b1fe3fdd92029f9517fa17a0',
  'hoa/visitor' => '2.17.01.16@c18fe1cbac98ae449e0d56e87469103ba08f224a',
  'hoa/zformat' => '1.17.01.10@522c381a2a075d4b9dbb42eb4592dd09520e4ac2',
  'imagine/imagine' => '1.2.3@cb2361e5bb4410b681462d8e4f912bc5dabf84ab',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'jms/metadata' => '2.3.0@6eb35fce7142234946d58d13e1aa829e9b78b095',
  'jms/serializer' => '3.7.0@6ae57ed4a2c028051ead47e57005e4866b1c34b1',
  'jms/serializer-bundle' => '3.6.0@9986fff4d6c0ab099af0a7149376651e15c9a763',
  'jsor/doctrine-postgis' => 'v1.7.0@a656156dd3b730a2d46cbcb6270e7124cbf62786',
  'knplabs/gaufrette' => 'v0.9.0@786247eba04d4693e88a80ca9fdabb634675dcac',
  'knplabs/knp-markdown-bundle' => '1.8.1@7238cc264eab9c42d1a5b71950b55fe3dd78ab38',
  'knplabs/knp-menu' => '2.6.0@b6aade272c345b6fbd07fce5929a761cba0909b8',
  'knplabs/knp-menu-bundle' => 'v2.3.0@78b0cebf8e1490f12ba6555511282954de83f627',
  'kriswallsmith/buzz' => 'v0.16.1@4977b7d44dbef49cdc641f14be6512fdcfe32f12',
  'laminas/laminas-json' => '3.1.2@00dc0da7b5e5018904c5c4a8e80a5faa16c2c1c6',
  'laminas/laminas-zendframework-bridge' => '1.0.4@fcd87520e4943d968557803919523772475e8ea3',
  'liip/imagine-bundle' => '2.3.0@06740a0a0e9c0054d3e0589472fd19b975784c52',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '1.4.8@8eaa40cceec7bf0518187530b2e63871be661b72',
  'markbaker/matrix' => '1.2.0@5348c5a67e3b75cd209d70103f916a93b1f1ed21',
  'michelf/php-markdown' => '1.9.0@c83178d49e372ca967d1a8c77ae4e051b3a3c75c',
  'monolog/monolog' => '1.25.4@3022efff205e2448b560c833c6fbbf91c3139168',
  'myclabs/php-enum' => '1.7.6@5f36467c7a87e20fbdc51e524fd8f9d1de80187c',
  'ob/highcharts-bundle' => '1.7@7faa0a48aa8255ff047b2ff76ead6222bfffc2da',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'orbitale/cms-bundle' => 'v3.1.1@d1a75fa4f6a1d21b9de17cd5326145f7ee4e7fce',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'phpoffice/phpspreadsheet' => '1.13.0@21bfb5b3243b8ceb9eda499a4d699fc42c11a9d1',
  'picoss/sonata-extra-admin-bundle' => '4.0@2b62f84c4ad5559b62d2e7bf4adda6ac1ca13f67',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'pugx/autocompleter-bundle' => 'v1.5.0@55abcee0e3d59ef0a3f017ce21c55bf5a502be8e',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'redcode/tree-bundle' => '0.1-alpha@430eee919979d8b0f4b5fa1445b8ee0f9ba99fc2',
  'sensio/framework-extra-bundle' => 'v5.5.5@c76bb1c5c67840ecb6d9be8e9d8d7036e375e317',
  'sensiolabs/security-checker' => 'v6.0.3@a576c01520d9761901f269c4934ba55448be4a54',
  'sonata-project/admin-bundle' => '3.68.0@6c37f8f9c961d8167d6dcae1d2ab4b9a9c6c64d0',
  'sonata-project/block-bundle' => '3.19.0@144b290187625be6b17da10df47c08e37927f08a',
  'sonata-project/cache' => '1.1.1@0d2849ccb08a74cc9eed34820e5bb1486e56c4b0',
  'sonata-project/cache-bundle' => '2.4.2@359f9afcc909e61b3766e66700e112528c699b8a',
  'sonata-project/classification-bundle' => '3.11.1@76570e9d69611033b0e6921c55b91826d85df62d',
  'sonata-project/core-bundle' => '3.20.0@3979caf03680d1fbf8f4bc53f96ee0e0496ab972',
  'sonata-project/datagrid-bundle' => '2.5.0@3d67da1be314130c8b419a881582c93bedf809fa',
  'sonata-project/doctrine-extensions' => '1.6.0@9f39109af81561f8175a3bcece454724a8d9e053',
  'sonata-project/doctrine-orm-admin-bundle' => '3.11.0@a24f44ad3ea4672920df6f7bccd6a51ef72cad34',
  'sonata-project/easy-extends-bundle' => '2.5.0@c62fb4f7e74f7fc5f32f122ffa8131d7cf05a1db',
  'sonata-project/exporter' => '2.2.0@ed2b6e43982eec5c267b3ff3bc0e3c97ab98b849',
  'sonata-project/form-extensions' => '0.1.1@b5a7b345cd013457f16cc6de0d17e844238874e6',
  'sonata-project/formatter-bundle' => '4.1.3@abdc79753193667726661e9bca984055b9b9eb14',
  'sonata-project/intl-bundle' => '2.7.0@222b9bf6ff14429e369e9b20bb9dec75a2ae2eda',
  'sonata-project/media-bundle' => '3.24.0@398d6b76396756d400ca2be0aaf1ab917cd7201f',
  'sonata-project/news-bundle' => '3.12.0@bea82187e1792530f11e7b7f75f868a78938da88',
  'sonata-project/translation-bundle' => '2.4.2@b9e66dbe65db28747146b01da6187a233a81a8f5',
  'sonata-project/twig-extensions' => '0.1.1@b18a216163265f038f7eb8534fb3771981e04975',
  'sonata-project/user-bundle' => '4.5.3@05f20722273fc1688ec298b5221f3e95430f09e9',
  'stof/doctrine-extensions-bundle' => 'v1.4.0@4d340daa1a8304faa62260be2adb0180e2138af3',
  'studio-42/elfinder' => '2.1.57@087524b1d7a4d76cfd848dee2093cd8daf987f78',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v4.4.9@d8a755baa015b8949a105b8288eeb0714d9b1b5f',
  'symfony/cache' => 'v4.4.9@aaf9cf1923794c950976bbcc35eb19a26aad95e8',
  'symfony/cache-contracts' => 'v2.1.2@87c92f62c494626598e9148208aaa6d1716b8e3c',
  'symfony/config' => 'v4.4.9@395f6e09e1dc6ac9c1a5eea3b7f44f7a820a5504',
  'symfony/console' => 'v4.4.9@326b064d804043005526f5a0494cfb49edb59bb0',
  'symfony/debug' => 'v4.4.9@28f92d08bb6d1fddf8158e02c194ad43870007e6',
  'symfony/dependency-injection' => 'v4.4.9@6a2cecd7011aec38b5fb2270abf0de120e7679b1',
  'symfony/doctrine-bridge' => 'v4.4.9@cfa26d8cc2a5e799f436fefd00ed81e3dd591e03',
  'symfony/dotenv' => 'v4.4.9@24d734ab97c7fb8b4fa10c64ee0c344f2badfcf0',
  'symfony/error-handler' => 'v4.4.9@0df9a23c0f9eddbb6682479fee6fd58b88add75b',
  'symfony/event-dispatcher' => 'v4.4.9@a5370aaa7807c7a439b21386661ffccf3dff2866',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/expression-language' => 'v4.4.9@89f0e2c82d8c12975180f993383decbb810ad73e',
  'symfony/filesystem' => 'v4.4.9@b27f491309db5757816db672b256ea2e03677d30',
  'symfony/finder' => 'v4.4.9@5729f943f9854c5781984ed4907bbb817735776b',
  'symfony/flex' => 'v1.7.1@a53056880aae0ce034ac6c38906e162ee5cfd2df',
  'symfony/form' => 'v4.4.9@ac1342877c6941728e038a1bae9c23f9e5c0f126',
  'symfony/framework-bundle' => 'v4.4.9@d4883d91302ea94c517fcf91fcaef079487ca3e0',
  'symfony/http-client' => 'v4.4.9@d850d6ee955aaa18f05e6df9a11c393c42d45fe0',
  'symfony/http-client-contracts' => 'v2.1.2@f8bed25edc964d015bcd87f1fec5734963931910',
  'symfony/http-foundation' => 'v4.4.9@3adfbd7098c850b02d107330b7b9deacf2581578',
  'symfony/http-kernel' => 'v4.4.9@54526b598d7fc86a67850488b194a88a79ab8467',
  'symfony/inflector' => 'v4.4.9@3330be44724db42f0aa493002ae63f5d29f8d5f7',
  'symfony/intl' => 'v4.4.9@42a07a917c4db30c671b545175e402053ff23ad0',
  'symfony/mailer' => 'v4.4.9@a304d790ca286fd4ff7ebae649e153d20ec5d6de',
  'symfony/mime' => 'v4.4.9@2adc53069becd0de3ea2748438646610ad0968db',
  'symfony/monolog-bridge' => 'v4.4.9@beb70975af56acdd67f3add01970165954d577c5',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.9@73e1d0fe11ffceb7b7d4ca55b7381cd7ce0bac05',
  'symfony/orm-pack' => 'v1.0.8@c9bcc08102061f406dc908192c0f33524a675666',
  'symfony/polyfill-intl-grapheme' => 'v1.17.0@e094b0770f7833fdf257e6ba4775be4e258230b2',
  'symfony/polyfill-intl-icu' => 'v1.17.0@4ef3923e4a86e1b6ef72d42be59dbf7d33a685e3',
  'symfony/polyfill-intl-idn' => 'v1.17.0@3bff59ea7047e925be6b7f2059d60af31bb46d6a',
  'symfony/polyfill-intl-normalizer' => 'v1.17.0@1357b1d168eb7f68ad6a134838e46b0b159444a9',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/polyfill-php80' => 'v1.17.0@5e30b2799bc1ad68f7feb62b60a73743589438dd',
  'symfony/process' => 'v4.4.9@c714958428a85c86ab97e3a0c96db4c4f381b7f5',
  'symfony/property-access' => 'v4.4.9@e6d51a8845b862835f5fcaf3c1030a50dc7cc70f',
  'symfony/property-info' => 'v4.4.9@9904ddd5a24777b744123148bfaedbd83ce66d24',
  'symfony/routing' => 'v4.4.9@0f557911dde75c2a9652b8097bd7c9f54507f646',
  'symfony/security-acl' => 'v3.0.4@dc8f10b3bda34e9ddcad49edc7accf61f31fce43',
  'symfony/security-bundle' => 'v4.4.9@6c1e30e2755928313e5eb55af20f615ed9fec2a2',
  'symfony/security-core' => 'v4.4.9@16ab88e5692e3fc32ae4ad550a55fbced516203b',
  'symfony/security-csrf' => 'v4.4.9@8788f6d4c8555b34d6f32f42b996b937b473f6b3',
  'symfony/security-guard' => 'v4.4.9@699162c3a9fcceb5ec8bce35a3dc2fcb79c6751e',
  'symfony/security-http' => 'v4.4.9@4aab90c5797a4f2ee9d5cd91f5e884d1e21f431a',
  'symfony/serializer' => 'v4.4.9@f2d82706d488b87e67050b03a9ae54194b129024',
  'symfony/serializer-pack' => 'v1.0.3@9bbce72dcad0cca797b678d3bfb764cf923ab28a',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'symfony/stopwatch' => 'v4.4.9@f51fb90df1154a7f75987198a9689e28f91e6a50',
  'symfony/string' => 'v5.1.0@90c2a5103f07feb19069379f3abdcdbacc7753a9',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/templating' => 'v4.4.9@c28d2d167b7e8487b1f14f2da358ce19e703d14b',
  'symfony/translation' => 'v4.4.9@79d3ef9096a6a6047dbc69218b68c7b7f63193af',
  'symfony/translation-contracts' => 'v2.1.2@e5ca07c8f817f865f618aa072c2fe8e0e637340e',
  'symfony/twig-bridge' => 'v4.4.9@13a9659ebceea38814ef8fde6399e36760ea08ad',
  'symfony/twig-bundle' => 'v4.4.9@c83e606bdc54504a1b2bcd8807b5dd139187b4a4',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v4.4.9@2fae3378102cff29976ce9e35f6964c78fce02b6',
  'symfony/var-dumper' => 'v4.4.4@46b53fd714568af343953c039ff47b67ce8af8d6',
  'symfony/var-exporter' => 'v4.4.9@52624517deddee019b796021e084f30df40a9124',
  'symfony/web-link' => 'v4.4.9@b862a104ef3a233b6f12fdbf6b57113308af79ff',
  'symfony/yaml' => 'v4.4.9@c2d2cc66e892322cfcc03f8f12f8340dbd7a3f8a',
  'symfonycasts/reset-password-bundle' => 'v1.1.1@ac39892a5de861209cb7491e056a77a0b872e87d',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/extra-bundle' => 'v3.0.3@6eaf1637abe6b68518e7e0949ebb84e55770d5c6',
  'twig/string-extra' => 'v3.0.3@9905d4410f1214df183fbb1a5e7848c560fdd551',
  'twig/twig' => 'v2.12.5@18772e0190734944277ee97a02a9a6c6555fcd94',
  'vich/uploader-bundle' => '1.11.0@8ef4935f5535bb4e967f30ee95dff358c7c0705e',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'whiteoctober/breadcrumbs-bundle' => '1.4.5@ad813b53f4f12fa7450d75bceb7a5d7ab9c39672',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'composer/semver' => '1.5.1@c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
  'composer/xdebug-handler' => '1.4.2@fa2aaf99e2087f013a14f7432c1cd2dd7d8f1f51',
  'friendsofphp/php-cs-fixer' => 'v2.16.3@83baf823a33a1cbd5416c8626935cf3f843c10b0',
  'nikic/php-parser' => 'v4.5.0@53c2753d756f5adb586dca79c2ec0e2654dd9463',
  'pdepend/pdepend' => '2.7.1@daba1cf0a6edaf172fa02a17807ae29f4c1c7471',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'phpmd/phpmd' => '2.8.2@714629ed782537f638fe23c4346637659b779a77',
  'squizlabs/php_codesniffer' => '3.5.5@73e2e7f57d958e7228fce50dc0c61f58f017f9f6',
  'symfony/browser-kit' => 'v4.4.9@f53310646af9901292488b2ff36e26ea10f545f5',
  'symfony/css-selector' => 'v4.4.9@afc26133a6fbdd4f8842e38893e0ee4685c7c94b',
  'symfony/debug-bundle' => 'v4.4.9@12a020d14b4f6f3a5cfb46cd83836b78be036210',
  'symfony/debug-pack' => 'v1.0.8@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dom-crawler' => 'v4.4.9@c18354d5a0bb84c945f6257c51b971d52f10c614',
  'symfony/maker-bundle' => 'v1.19.0@bea8c3c959e48a2c952cc7c4f4f32964be8b8874',
  'symfony/phpunit-bridge' => 'v5.1.0@7a05a59154053d62674def66a5c99896113632f2',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v4.4.9@5e7ed9eb31c1f083e6e70a1dcb41643ef7bcd60b',
  'paragonie/random_compat' => '2.*@a7d07a3463218bb6c6eaa3ebd4f297dc3729210a',
  'symfony/polyfill-ctype' => '*@a7d07a3463218bb6c6eaa3ebd4f297dc3729210a',
  'symfony/polyfill-iconv' => '*@a7d07a3463218bb6c6eaa3ebd4f297dc3729210a',
  'symfony/polyfill-php71' => '*@a7d07a3463218bb6c6eaa3ebd4f297dc3729210a',
  'symfony/polyfill-php70' => '*@a7d07a3463218bb6c6eaa3ebd4f297dc3729210a',
  'symfony/polyfill-php56' => '*@a7d07a3463218bb6c6eaa3ebd4f297dc3729210a',
  'mamias/2020' => 'dev-master@a7d07a3463218bb6c6eaa3ebd4f297dc3729210a',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}

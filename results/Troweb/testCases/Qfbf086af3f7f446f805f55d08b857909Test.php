<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qfbf086af3f7f446f805f55d08b857909Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query":"{\n  me {\n    isAdmin\n    authorizationRules {\n      operationNames\n    }\n  }\n}\n","variables":{},"operation_name":null,"created_at":"2023-05-07 21:41:24","updated_at":"2023-05-07 21:41:24","times_called":1}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8085/api/v1/graphql', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer 123456']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('me', $responseContent);
        
        $this->assertNotNull($responseContent['me']);
        
        $this->assertArrayHasKey('isAdmin', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['isAdmin']);
        
        $this->assertIsBool($responseContent['me']['isAdmin']);
        
        $this->assertArrayHasKey('authorizationRules', $responseContent['me']);
        
        $this->assertNotNull($responseContent['me']['authorizationRules']);
        
        $this->assertIsArray($responseContent['me']['authorizationRules']);
        
        for($g = 0; $g < count($responseContent['me']['authorizationRules']); $g++) {
        
        $this->assertNotNull($responseContent['me']['authorizationRules'][$g]);
        
        $this->assertArrayHasKey('operationNames', $responseContent['me']['authorizationRules'][$g]);
        
        $this->assertNotNull($responseContent['me']['authorizationRules'][$g]['operationNames']);
        
        $this->assertIsArray($responseContent['me']['authorizationRules'][$g]['operationNames']);
        
        for($f = 0; $f < count($responseContent['me']['authorizationRules'][$g]['operationNames']); $f++) {
        
        $this->assertNotNull($responseContent['me']['authorizationRules'][$g]['operationNames'][$f]);
        
        $this->assertContains($responseContent['me']['authorizationRules'][$g]['operationNames'][$f], ['createItems', 'updateItems', 'deleteItems', 'fullAccess', 'createUsers', 'deleteUsers', 'updateSchema', 'createSchemas', 'deleteSchemas', 'createAuthorityGroups', 'createPluginsCollectionConfigs', 'updatePluginsCollectionConfigs', 'createAuthorizationRules', 'updateAuthorizationRules', 'deletePluginsCollectionConfigs', 'createPluginsOrgInstance', 'updatePluginsOrgInstance', 'addTreeNodes', 'publishTree', 'createDraftTree', 'addBatchNodesTree', 'updateTreeMetadata', 'updateTreeNodes', 'deleteTree', 'deleteTreeNodes', 'getOrgPlans', 'superAdmin_initOrganization', 'superAdmin_reindexingESData', 'superAdmin_syncTranslations', 'superAdmin_loadTranslations', 'superAdmin_orgAdmins', 'superAdmin_getInvoices', 'checkoutPlanSubscription', 'cancelSubscription', 'deleteAuthorityGroup', 'updateAuthorityGroup', 'deleteAuthorizationRules', 'queryTrees', 'queryUsers', 'getAuthorizationRules', 'getCommonFields', 'getPlugins', 'getAuthorityGroups', 'getPluginsOrgInstance', 'getPluginsCollectionConfigs', 'createInternationalizationConfig', 'updateInternationalizationConfig', 'deleteInternationalizationConfig', 'getInternationalizationConfig', 'updateOrgGeneralSetting', 'setBrandingConfig', 'unsetBrandingConfig', 'updateApplicationAppearance', 'deletePageLayouts', 'setPageLayout', 'exportingItemsStream', 'setPreferredInternationalizationConfig']);
        
        }
        
        }
        

    }
}
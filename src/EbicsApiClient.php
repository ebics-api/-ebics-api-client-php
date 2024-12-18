<?php

namespace EbicsApi\Client;

use RuntimeException;

/**
 * EBICS API Client class.
 */
class EbicsApiClient
{
    public function __construct(private string $apiKey, private string $apiHost)
    {
    }

    /**
     * Create Connection.
     * @param array $data
     * @return array
     */
    public function connectionCreate(array $data): array
    {
        return $this->makeRequest('/api/ebics/connections/create', 'POST', $data);
    }

    /**
     * Update connection.
     * @param int $id
     * @param array $data
     * @return array
     */
    public function connectionUpdate(int $id, array $data): array
    {
        return $this->makeRequest("/api/ebics/connections/$id/update", 'POST', $data);
    }

    /**
     * Get connection.
     * @param int $id
     * @return array
     */
    public function connectionGet(int $id): array
    {
        return $this->makeRequest("/api/ebics/connections/$id", 'GET');
    }

    /**
     * List of connections.
     * @return array
     */
    public function connectionList(): array
    {
        return $this->makeRequest('/api/ebics/connections', 'GET');
    }

    /**
     * Delete connection.
     * @param int $id
     * @return array
     */
    public function connectionDelete(int $id): array
    {
        return $this->makeRequest("/api/ebics/connections/$id", 'DELETE');
    }

    /**
     * Generate keyring.
     * @param array $data
     * @return array
     */
    public function keyringGenerate(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/generate', 'POST', $data);
    }

    /**
     * Initialize keyring activation.
     * @param array $data
     * @return array
     */
    public function keyringInit(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/init', 'POST', $data);
    }

    /**
     * Suspend keyring activation.
     * @param array $data
     * @return array
     */
    public function keyringSuspend(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/suspend', 'POST', $data);
    }

    /**
     * Get letter for keyring.
     * @param array $data
     * @return array
     */
    public function keyringLetter(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/letter', 'POST', $data);
    }

    /**
     * Change secret for keyring.
     * @param array $data
     * @return array
     */
    public function keyringChangeSecret(array $data): array
    {
        return $this->makeRequest('/api/ebics/keyring/change-secret', 'POST', $data);
    }

    /**
     * HEV Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHev(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/hev', 'POST', $data);
    }

    /**
     * INI Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeIni(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/ini', 'POST', $data);
    }

    /**
     * HIA Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHia(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/hia', 'POST', $data);
    }

    /**
     * HPB Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHpb(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/hpb', 'POST', $data);
    }

    /**
     * HPD Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHpd(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/hpd', 'POST', $data);
    }

    /**
     * HKD Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHkd(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/hkd', 'POST', $data);
    }

    /**
     * HTD Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHtd(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/htd', 'POST', $data);
    }

    /**
     * HAA Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeHaa(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/haa', 'POST', $data);
    }

    /**
     * FDL Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeFdl(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/fdl', 'POST', $data);
    }

    /**
     * FUL Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeFul(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/ful', 'POST', $data);
    }

    /**
     * PTK Order type.
     * @param array $data
     * @return array
     */
    public function orderTypePtk(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/ptk', 'POST', $data);
    }

    /**
     * VMK Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeVmk(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/vmk', 'POST', $data);
    }

    /**
     * STA Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeSta(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/sta', 'POST', $data);
    }

    /**
     * c52 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypec52(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/c52', 'POST', $data);
    }

    /**
     * c53 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypec53(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/c53', 'POST', $data);
    }

    /**
     * c54 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypec54(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/c54', 'POST', $data);
    }

    /**
     * Z52 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeZ52(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/z52', 'POST', $data);
    }

    /**
     * Z53 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeZ53(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/z53', 'POST', $data);
    }

    /**
     * Z54 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeZ54(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/z54', 'POST', $data);
    }

    /**
     * ZSR Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeZsr(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/zsr', 'POST', $data);
    }

    /**
     * XEK Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeXek(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/xek', 'POST', $data);
    }

    /**
     * CCT Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeCct(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/cct', 'POST', $data);
    }

    /**
     * CIP Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeCip(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/cip', 'POST', $data);
    }

    /**
     * XE2 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeXe2(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/xe2', 'POST', $data);
    }

    /**
     * XE3 Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeXe3(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/xe3', 'POST', $data);
    }

    /**
     * YCT Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeYct(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/yct', 'POST', $data);
    }

    /**
     * CDB Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeCdb(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/cdb', 'POST', $data);
    }

    /**
     * CDD Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeCdd(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/cdd', 'POST', $data);
    }

    /**
     * BTD Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeBtd(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/btd', 'POST', $data);
    }

    /**
     * BTU Order type.
     * @param array $data
     * @return array
     */
    public function orderTypeBtu(array $data): array
    {
        return $this->makeRequest('/api/ebics/order-types/btu', 'POST', $data);
    }

    /**
     * List AccessLogs.
     * @return array
     */
    public function accessLogList(): array
    {
        return $this->makeRequest('/api/ebics/logs', 'GET');
    }

    /**
     * List FetchedFiles.
     * @return array
     */
    public function fetchedFileList(): array
    {
        return $this->makeRequest('/api/ebics/fetched-files', 'GET');
    }

    /**
     * Download FetchedFile.
     * @return array
     */
    public function fetchedFileDownload(int $id): array
    {
        return $this->makeRequest("/api/ebics/fetched-files/$id/download", 'GET');
    }

    /**
     * Internal method for making requests.
     * @param string $endpoint
     * @param string $method
     * @param array|null $body
     * @return array
     */
    private function makeRequest(string $endpoint, string $method, ?array $body = null): array
    {
        $url = $this->apiHost . $endpoint;

        $ch = curl_init($url);

        $headers = [
            'Accept: application/json',
            'Authorization: Key ' . $this->apiKey,
        ];

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        if ($body) {
            $formData = http_build_query($body);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $formData);
        }

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($response === false) {
            throw new RuntimeException('cURL Error: ' . curl_error($ch));
        }

        curl_close($ch);

        if ($httpCode < 200 || $httpCode >= 300) {
            throw new RuntimeException("Error: $httpCode - $response");
        }

        return json_decode($response, true);
    }
}
# EBICS API Client (PHP module)

<img src="./doc/ebics-api-client-logo.png" height="100" align="left" style="padding-right:20px; padding-bottom: 20px;">

PHP module to utilize EBICS API Client application.  
EBICS API Client - https://sites.google.com/view/ebics-api-client  
EBICS Client can be deployed as a standalone service on a webserver or within a Docker container and provides:

<br clear="left" />

- :100: Support for EBICS Integration
- :white_check_mark: RESTful API to operate with orders, connections, keyrings, access logs, fetched files
- :white_check_mark: Extended Access Policy
- :white_check_mark: Execute order transactions directly from the App
- :white_check_mark: Manage Connections and Monitor access logs
- :white_check_mark: Scheduler Jobs, Fetched files secure storage

<br clear="left"/>

# Installation

`composer require ebics-api/ebics-api-client-php`

# Usage

```php

$client = new EbicsApi\Client\EbicsApiClient($env['API_KEY'], $env['API_HOST']);

```

# Methods

* ## Connections

Connections between client application and bank server.

| Method                              | Description                             |
|-------------------------------------|-----------------------------------------|
| $client->connectionCreate(data)     | Create new connection to the Bank.      |
| $client->connectionUpdate(id, data) | Update existing connection to the Bank. |
| $client->connectionGet(id)          | One connection to the Bank.             |
| $client->connectionList()           | List of all connections to the Bank.    |
| $client->connectionDelete(id)       | Delete a connection to the Bank.        |

* ## Keyrings

Keyring with sensitive keys to perform order types methods.

| Method                             | Description                                                                                |
|------------------------------------|--------------------------------------------------------------------------------------------|
| $client->keyringGenerate(data)     | Generate new keyring and encrypt by secret<br/> (Requires before INI and HIA order types). |
| $client->keyringInit(data)         | Initialize keyring (Only before Bank activated connection).                                |
| $client->keyringConfirm(data)      | Confirm keyring (Only after Bank activated connection).                                    |
| $client->keyringSuspend(data)      | Deactivate keyring (SPR order type).                                                       |
| $client->keyringLetter(data)       | Letter should be sent to Bank for Keyring activation.                                      |
| $client->keyringChangeSecret(data) | Change secret for existing Keyring.                                                        |

* ## Order Types

Order type methods to download or upload files to/from the Bank.

| Method                      | Description                                                                                  |
|-----------------------------|----------------------------------------------------------------------------------------------|
| $client->orderTypeHev(data) | Order type methods to download or upload files to/from the Bank.                             |
| $client->orderTypeIni(data) | Send to the bank public signature of electronic signature.                                   |
| $client->orderTypeHia(data) | Send to the bank public signatures of authentication and encryption.                         |
| $client->orderTypeHpb(data) | Download the Bank public signatures of authentication and encryption.                        |
| $client->orderTypeHpd(data) | Download the bank server parameters.                                                         |
| $client->orderTypeHkd(data) | Download customer`s customer and subscriber information.                                     |
| $client->orderTypeHtd(data) | Download subscriber`s customer and subscriber information.                                   |
| $client->orderTypeHaa(data) | Download Bank available order types.                                                         |
| $client->orderTypeFdl(data) | Download the files from the bank.                                                            |
| $client->orderTypeFul(data) | Upload the files to the bank.                                                                |
| $client->orderTypePtk(data) | Download transaction status.                                                                 |
| $client->orderTypeVmk(data) | Download the interim transaction report in SWIFT format (MT942).                             |
| $client->orderTypeSta(data) | Download the bank account statement.                                                         |
| $client->orderTypeC52(data) | Download the bank account report in Camt.052 format.                                         |
| $client->orderTypeC53(data) | Download the bank account statement in Camt.053 format.                                      |
| $client->orderTypeC54(data) | Download Debit Credit Notification (DTI).                                                    |
| $client->orderTypeZ52(data) | Download the bank account report in Camt.052 format (i.e Switzerland financial services).    |
| $client->orderTypeZ53(data) | Download the bank account statement in Camt.053 format (i.e Switzerland financial services). |
| $client->orderTypeZ54(data) | Download the bank account statement in Camt.054 format (i.e available in Switzerland).       |
| $client->orderTypeZsr(data) | Download Order/Payment Status report.                                                        |
| $client->orderTypeXek(data) | Download account information as PDF-file.                                                    |
| $client->orderTypeCct(data) | Upload initiation of the credit transfer per Single Euro Payments Area.                      |
| $client->orderTypeCip(data) | Upload initiation of the instant credit transfer per Single Euro Payments Area.              |
| $client->orderTypeXe2(data) | Upload initiation of the Swiss credit transfer (i.e available in Switzerland).               |
| $client->orderTypeXe3(data) | Upload SEPA Direct Debit Initiation, CH definitions, CORE (i.e available in Switzerland).    |
| $client->orderTypeYct(data) | Upload Credit transfer CGI (SEPA & non SEPA).                                                |
| $client->orderTypeCdb(data) | Upload initiation of the direct debit transaction for business.                              |
| $client->orderTypeCdd(data) | Upload initiation of the direct debit transaction.                                           |
| $client->orderTypeBtd(data) | Download request files of any BTF structure.                                                 |
| $client->orderTypeBtu(data) | Upload the files to the bank.                                                                |

* ## Access Logs

Tracked access logs to Bank for Connections

| Method                   | Description               |
|--------------------------|---------------------------|
| $client->accessLogList() | Access logs to the Banks. |

* ## Fetched files

Fetched files by run Scheduler Jobs

| Method                           | Description                                                    |
|----------------------------------|----------------------------------------------------------------|
| $client->fetchedFileList()       | Fetched files of run scheduler order transactions to the Bank. |
| $client->fetchedFileDownload(id) | Download fetched file content.                                 |

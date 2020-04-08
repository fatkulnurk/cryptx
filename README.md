CryptX
---
PHP library Encrypt & Decrypt


This packages in wrapper from https://github.com/mmeyer2k/dcrypt#aes-256-gcm-encryption and build in function php.

### Install
See in packagist
````
https://packagist.org/packages/fatkulnurk/cryptx
````
with composer
```
composer require fatkulnurk/cryptx
```

### Next Algorith
- [ ] Base64
- [ ] more

### Usage


| Class Name            | OpenSSL Cipher   | Security Rating   | Further Reading |
| --------------------  | :--------------: | :---------------: | --------------- |
| `Aes256Gcm` or `Aes`  |    `aes-256-gcm` | :smiley:          | [wiki](https://en.wikipedia.org/wiki/Galois/Counter_Mode) |
| `Aes256Ctr`           |    `aes-256-ctr` | :relaxed:         | [wiki](https://en.wikipedia.org/wiki/Block_cipher_mode_of_operation#Counter_(CTR) |
| `Aes256Cbc`           |    `aes-256-cbc` | :expressionless:  | [wiki](https://en.wikipedia.org/wiki/Block_cipher_mode_of_operation) |
| `Aes256Ofb`           |    `aes-256-ofb` | :grimacing:       | [wiki](https://en.wikipedia.org/wiki/Block_cipher_mode_of_operation#Output_Feedback_(OFB) |
| `Aes256Cfb`           |    `aes-256-cfb` | :hushed:          | [wiki](https://en.wikipedia.org/wiki/Block_cipher_mode_of_operation#Cipher_Feedback_(CFB) |
| `Aes256Ccm`           |    `aes-256-ccm` | :astonished:      | [wiki](https://en.wikipedia.org/wiki/CCM_mode) |
| `Aes256Ecb`           |    `aes-256-ecb` | :rage:            | [wiki](https://en.wikipedia.org/wiki/Block_cipher_mode_of_operation#ECB) |

**Encrypt:**
```
<?php
echo Cryptx::encrypt('value', 'key', 'cipher name', 'algo name');

// cipher name and algo name is optional
``````

**Decrypt:**
```
<?php
echo Cryptx::decrypt('value', 'key', 'cipher name', 'algo name');

// cipher name and algo name is optional
``````

**OneTimePad:**
```
<?php
echo Cryptx::oneTimePadoneTimePad(string $encrypted,string $key, $pool = false, $customPool = "whirlpool");

// pool and custompoll is optional
``````"# cryptx" 

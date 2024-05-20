# Protobuf PHP EXT Heap corruption reproducer

## Bug

Running a very simple codeception or protobuf test just initializing a protobuf message causes
a `zend_mm_heap corrupted` error when `protobuf.keep_descriptor_pool_after_request` is activated.

The bug is reproducible on at least a wide range of Linux and Mac systems.

## Usage local

1. `php composer.phar install`
2. `vendor/bin/codecept run`
3. alternative `vendor/bin/phpunit phpunit_tests`

## Usage with docker

1. `docker compose up`
2. `docker compose run --rm cli vendor/bin/codecept run`
3. alternative `docker compose run --rm cli vendor/bin/phpunit phpunit_tests` (in local it did show the corruption error this did not)

## Expected (error) output

```
Tests.Protobuf Tests (1) ------------------------------------------------------------------------------------------------------------------------------------------------------------
✔ ProtobufTest: Protobuf(0.01s)
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Time: 00:00.110, Memory: 10.00 MB

OK (1 test, 0 assertions)
zend_mm_heap corrupted
```


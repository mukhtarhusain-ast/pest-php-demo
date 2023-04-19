<?php

test('example', function () {
    expect(true)->toBeTrue();
});

it('find max value from 1 & 2', function () {
    $result = max(1, 2);

    expect($result)->toBe(2);
});
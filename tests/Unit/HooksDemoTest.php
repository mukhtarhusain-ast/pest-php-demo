<?php

beforeAll( function () {
    dump("beforeAll hook called");
});

beforeEach( function () {
    dump("beforeEach hook called");
});

afterEach( function () {
    dump("afterEach hook called");
});


afterAll( function () {
    dump("afterAll hook called");
});

test('find maximum number of 1 to 5', function () {
    $result = max(1, 2, 3, 4, 5);
    expect($result)->toBe(5);
});

test('find minimum number of 1 to 5', function () {
    $result = min(1, 2, 3, 4, 5);
    expect($result)->toBe(1);
});
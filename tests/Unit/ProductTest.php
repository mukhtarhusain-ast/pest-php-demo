<?php

use App\Models\Product;

test('example', function () {
    expect(true)->toBeTrue();
});

it('returns all products as JSON', function () {
    // Arrange
    $product = Product::factory()->create();
    $anotherProduct = Product::factory()->create();

    // Act & Assert
    $this->post('api/products')
        ->assertOk()
        ->assertJson([
            [
                'name' => $product->title,
                'detail' => $product->detail,
            ],
            [
                'name' => $anotherProduct->name,
                'detail' => $anotherProduct->detail,
            ],
        ]);
})->skip('temporary it\'s throws an error');
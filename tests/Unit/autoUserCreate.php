<?php
use App\Models\User;
test('user_auto_create_test', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    expect(true)->toBeTrue();
});

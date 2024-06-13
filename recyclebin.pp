<?php

<label for="product_type_id">Product Type:</label>
        <select id="product_type_id" name="product_type_id">
            @foreach($product_types as $product_type)
                <option value="{{ $product_type->id }}" {{ $product_type->id == $category->product_type_id ? 'selected' : '' }}>
                    {{ $product_type->name }}
                </option>
            @endforeach
        </select>
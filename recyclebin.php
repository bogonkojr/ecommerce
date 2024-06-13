<label for="product_type_id">Product Type:</label>
        <select id="product_type_id" name="product_type_id">
            @foreach($product_types as $product_type)
                <option value="{{ $product_type->id }}" {{ $product_type->id == $category->product_type_id ? 'selected' : '' }}>
                    {{ $product_type->name }}
                </option>
            @endforeach
        </select>
<!-- =================================Admin Submenu======================================= -->
        @if ($product_types->isNotEmpty())
    <ul class="submenu">
        @foreach($product_types as $product_type)
            <li class="submenu-item">
                <a href="{{ url('admin-unit-product-types/'.$product_type->id) }}" class="submenu-link">{{ $product_type->name }}</a>
                @if ($product_type->categories->isNotEmpty())
                    <ul class="submenu">
                        @foreach($product_type->categories as $category)
                            <li class="submenu-item">
                                <a href="{{ url('admin-categories/'.$category->id) }}" class="submenu-link">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>...</p>
                @endif
            </li>
        @endforeach
    </ul>
@else
    <p>No Product Types Available.</p>
@endif
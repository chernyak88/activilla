<div class="ty-grid-list__image">
    {include file="views/products/components/product_icon.tpl" product=$product show_gallery=true}

    {assign var="product_labels" value="product_labels_`$obj_prefix``$obj_id`"}
    {$smarty.capture.$product_labels nofilter}

    {capture name="product_multicolumns_list_control_data_wrapper"}
        <div class="ty-grid-list__control">
            {capture name="product_multicolumns_list_control_data"}
                {hook name="products:product_multicolumns_list_control"}
                {if $show_add_to_cart}
                    <div class="button-container">
                        {if $product.product_options || $product.variation_feature_collection}
                            <i class="ty-icon-cross"></i>
                        {else}
                            <i class="ty-icon-cart"></i>
                        {/if}
                        {$add_to_cart = "add_to_cart_`$obj_id`"}
                        {$smarty.capture.$add_to_cart nofilter}
                    </div>
                {/if}
                {/hook}
            {/capture}
            {$smarty.capture.product_multicolumns_list_control_data nofilter}
        </div>
    {/capture}

    {if $smarty.capture.product_multicolumns_list_control_data|trim}
        {$smarty.capture.product_multicolumns_list_control_data_wrapper nofilter}
    {/if}
</div>

{assign var="rating" value="rating_$obj_id"}
{if $smarty.capture.$rating}
    <div class="grid-list__rating">
        {$smarty.capture.$rating nofilter}
    </div>
{/if}

{$category = strval($product.main_category)|fn_get_category_data}
<span class="ty-grid-list__item-category">{$category.category}</span>

<div class="ty-grid-list__item-name">
    {if $item_number == "Y"}
        <span class="item-number">{$cur_number}.&nbsp;</span>
        {math equation="num + 1" num=$cur_number assign="cur_number"}
    {/if}

    {assign var="name" value="name_$obj_id"}
    <bdi>{$smarty.capture.$name nofilter}</bdi>
</div>

<div class="ty-grid-list__price {if $product.price == 0}ty-grid-list__no-price{/if}">
    {assign var="old_price" value="old_price_`$obj_id`"}
    {if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}{/if}

    {assign var="price" value="price_`$obj_id`"}
    {$smarty.capture.$price nofilter}

    {assign var="clean_price" value="clean_price_`$obj_id`"}
    {$smarty.capture.$clean_price nofilter}

    {assign var="list_discount" value="list_discount_`$obj_id`"}
    {$smarty.capture.$list_discount nofilter}
</div>
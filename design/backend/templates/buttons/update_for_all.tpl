{if $display}
    {$absolute_position = $absolute_position|default:true}

    {if $hide_element}
        {$title_act = __("update_for_all_hid_act")}
        {$title_dis = __("update_for_all_hid_dis")}
    {else}
        {$title_act = __("update_for_all_act")}
        {$title_dis = __("update_for_all_dis")}
    {/if}
    {if $settings.Stores.default_state_update_for_all == 'active'}
        {$title = $title_act}
        {$visible = "visible"}
    {else}
        {$title = $title_dis}
    {/if}
    {if $runtime.simple_ultimate}
        {$visible = "hidden"}
    {/if}
    {$object_ids = $object_ids|default:[$object_id]}
    {$names = $names|default:[$object_id => $name]}

    <div class="update-for-all">
        <a class="cm-update-for-all-icon
            icon-group
            update-for-all__icon
            {if $absolute_position}update-for-all__icon--absolute{/if}
            cm-tooltip
            {$visible}
            {$meta}"
            href="#"
            title="{$title}"
            data-ca-title-active="{$title_act}"
            data-ca-title-disabled="{$title_dis}"
            data-ca-disable-id="{$object_ids|to_json}"
            {if $hide_element}data-ca-hide-id="{$hide_element}"{/if}>
        </a>
        {foreach $names as $object_id => $name}
            <input type="hidden"
                class="cm-no-hide-input"
                id="hidden_update_all_vendors_{$object_id}"
                name="{$name}"
                value="{"YesNo::YES"|enum}"
                {if $settings.Stores.default_state_update_for_all === "not_active" && !$runtime.simple_ultimate}
                    disabled="disabled"
                {/if}
            />
        {/foreach}
    </div>
{/if}

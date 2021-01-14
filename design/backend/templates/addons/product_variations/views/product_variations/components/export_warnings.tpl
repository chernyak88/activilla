<div>
     <div class="table-wrapper">
        <table width="100%" class="table table-no-hover table--relative">
            {foreach $messages as $message}
                <tr class="no-border">
                    <td>{$message}</td>
                </tr>
            {/foreach}
        </table>
    </div>
    <div>
        <a class="btn cm-notification-close pull-right">{__("close")}</a>
    </div>
</div>
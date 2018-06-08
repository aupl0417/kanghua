<script>
$('#icon').on('afterchange.bjui.lookup', function(e, data) {
    var myvalue = 'fa fa-' + data.value
    //
    $("#icon_img").removeClass();
    $("#icon_img").addClass(myvalue);
    // do something...
})
</script>
<div class="bjui-pageContent">
    <form action="{:url('')}" class="pageForm" data-toggle="validate">
        <input type="hidden" name="dialog.id" value="edce142bc2ed4ec6b623aacaf602a4de">
        <table class="table table-condensed table-hover">
            <tbody>
                <tr>
                    <td>
                        <label for="j_dialog_operation" class="control-label x90">上级菜单：</label>
                        <select name="info[parentid]" data-toggle="selectpicker">
                            <option value="0">作为一级菜单</option>
                            <?php echo $select_categorys;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="j_dialog_code" class="control-label x90">菜单名：</label>
                        <input type="text" name="info[name]" data-rule="required" size="20" value="{$Detail.name}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="j_dialog_name" class="control-label x90">文件名：</label>
                        <input type="text" name="info[c]" data-rule="required" size="20" value="{$Detail.c}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="j_dialog_tel" class="control-label x90">方法名：</label>
                        <input type="text" name="info[a]" size="20" value="{$Detail.a}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="j_dialog_tel" class="control-label x90">图标：</label>
                        {notempty name="Detail.icon"}
                        <i id="icon_img" class="fa fa-{$Detail.icon}"></i>
                        {else /}
                        <i id="icon_img"></i>
                        {/notempty}
                        <input type="text" id="icon" name="icon" size="20" data-toggle="lookup" data-url="{:url('System/adminNodeIcon')}" value="{$Detail.icon}">

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="j_dialog_profession" class="control-label x90">排序：</label>
                        <input type="text" name="info[listorder]" data-rule="required" size="20" value="{$Detail.listorder|default=0}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="j_dialog_display" class="control-label x90">是否显示：</label>
                        <input type="radio" name="info[display]" id="j_dialog_display_yes" value="1" data-toggle="icheck" data-label="显示"  {eq name="Detail.display|default=1" value="1"}checked{/eq}>
                        <input type="radio" name="info[display]" id="j_dialog_display_no" value="0" data-toggle="icheck" data-label="隐藏" {eq name="Detail.display" value="0"}checked{/eq}>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<div class="bjui-pageFooter">
    <ul>
        <li><button type="button" class="btn-close">关闭</button></li>
        <li><button type="submit" class="btn-default">保存</button></li>
    </ul>
</div>
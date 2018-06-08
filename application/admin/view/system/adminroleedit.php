<div class="bjui-pageContent">
    <form action="{:url('')}" class="pageForm" data-toggle="validate">
        <input type="hidden" name="roleid" value="{$roleid}">
        <table class="table table-condensed table-hover">
            <tbody>
                <tr>
                    <td>
                        <label for="j_dialog_operation" class="control-label x90">角色名：</label>
                        <input type="text" name="info[rolename]" data-rule="required" size="20" value="{$Detail.rolename}"  class="required">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="j_dialog_code" class="control-label x90">描述：</label>
                        <textarea name="info[description]" cols="20" class="form-control" style="width: 337px; margin: 0px; height: 50px;">{$Detail.description}</textarea>
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

/**
 * コマンドウィンドウでクリックした文字列をhiddenに設定する。
 */
function command_click(value){
  document.command_form.hdnCommandValue.value = value;
  document.command_form.submit();
}
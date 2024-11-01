/**
 * Author: Ulrich Krause <eknori@eknori.de>
 * URL: https://eknori.de
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 */
SyntaxHighlighter.brushes.formula = function()
{
  this.regexList = [
    { regex: new RegExp('@[^\\(\\(|\\s\\)]+','gmi'),                      css:'lsKeyword' },
    { regex: new RegExp('\\[(.*?)\\]','gmi'),                           css:'lsString' },
    { regex: SyntaxHighlighter.regexLib.multiLineDoubleQuotedString,    css:'lsString' },
      ];
};
SyntaxHighlighter.brushes.formula.prototype = new SyntaxHighlighter.Highlighter();
SyntaxHighlighter.brushes.formula.aliases  = ['formula'];

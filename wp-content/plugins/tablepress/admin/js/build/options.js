(()=>{"use strict";const e=window.wp.i18n,t=e=>"#"===e[0]?document.getElementById(e.slice(1)):document.querySelectorAll(e),s=t("#option-use-custom-css");s&&(s.addEventListener("change",(function(){t("#option-custom-css").disabled=!this.checked})),s.dispatchEvent(new Event("change"))),t("#tablepress-page-form").addEventListener("submit",(function(){this.querySelectorAll(":scope input, :scope select, :scope textarea").forEach((e=>e.disabled=!1))})),(t=>{const s=window?.navigator?.platform?.includes("Mac")?(0,e._x)("⌘","keyboard shortcut modifier key on a Mac keyboard","tablepress"):(0,e._x)("Ctrl+","keyboard shortcut modifier key on a non-Mac keyboard","tablepress"),a=(0,e.sprintf)(t.dataset.shortcut,s);t.title=(0,e.sprintf)((0,e.__)("Keyboard Shortcut: %s","tablepress"),a),window.addEventListener("keydown",(e=>{let s="";(e.ctrlKey||e.metaKey)&&83===e.keyCode&&(s="save-changes"),"save-changes"===s&&(document.activeElement.blur(),t.click(),e.preventDefault())}),!0)})(t("#tablepress-options-save-changes")),t("#uninstall-tablepress").addEventListener("click",(t=>{confirm((0,e.__)("Do you really want to uninstall TablePress and delete ALL data?","tablepress"))&&confirm((0,e.__)("Are you really sure?","tablepress"))||t.preventDefault()}))})();
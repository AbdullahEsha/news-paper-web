// var editor = CKEDITOR.replace("editor");
ClassicEditor.create(document.querySelector("#editor"), {
    ckfinder: {
        uploadUrl:
            "/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json",
    },
    toolbar: {
        items: [
            "heading",
            "|",
            "fontfamily",
            "fontsize",
            "|",
            "alignment",
            "|",
            "fontColor",
            "fontBackgroundColor",
            "|",
            "bold",
            "italic",
            "strikethrough",
            "underline",
            "subscript",
            "superscript",
            "|",
            "link",
            "|",
            "outdent",
            "indent",
            "|",
            "bulletedList",
            "numberedList",
            "todoList",
            "|",
            "code",
            "codeBlock",
            "|",
            "insertTable",
            "|",
            "ckfinder",
            "uploadImage",
            "blockQuote",
            "|",
            "undo",
            "redo",
        ],
        shouldNotGroupWhenFull: true,
    },
}).catch(function (error) {
    console.error(error);
});
CKFinder.setupCKEditor(editor);

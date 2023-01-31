$("#contact-form").validate({
        rules: {
            name: {
                required: true,
                maxlength: 50
            },
            gender: {
                required: true
            },
            birth: {
                required: true
            },
            post: {
                required: true
            },
            adress: {
                required: true,
                maxlength: 200
            },
            email: {
                maxlength: 200
            },
            kind: {
                required: true
            },
            message: {
                required: true,
                maxlength: 1000
            },
        },
        message: {
            name: {
                required: '氏名を入力してください',
                maxlength: '50文字以内で入力してください'
            },
            gender: {
                required: '性別を選択してください'
            },
            birth: {
                required: '生年月日を選択してください'
            },
            post: {
                required: '郵便番号を入力してください'
            },
            adress: {
                required: '住所を入力してください',
                maxlength: '200文字以内で入力してください'
            },
            tell: {
                required: '電話番号を入力してください'
            },
            email: {
                required: 'メールアドレスを入力してください',
                maxlength: '200文字以内で入力してください'
            },
            kind: {
                required: '種類を選択してください'
            },
            message: {
                required: '相談内容を入力してください',
                maxlength: '1000文字以内で入力してください'
            },
        },
    });


<div class="container">
    <h2>تم إرسال البيانات بنجاح!</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <p>شكراً لك على تعبئة النموذج. سوف نتواصل معك قريباً.</p>
    <a href="{{ route('EasyFolio.home') }}" class="btn btn-primary">العودة إلى الصفحة الرئيسية</a>
</div>

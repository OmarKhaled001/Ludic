<header class="tc-inner-header-style1 pb-100" @if(app()->getLocale() == 'ar')style="direction: rtl; text-align: right;" @endif>
    <div class="container">
        <div class="info">
            @if (app()->getLocale() == 'ar')
            <h1 > {{ trans('main.contact') }} </h1>
            @else
            <h1 class="js-title">  {{ trans('main.contact') }} </h1>

            @endif
            <div class="text fsz-18 color-666"> {{ trans('main.contact_message') }} </div>
        </div>
    </div>
</header>
<section class="about-container vh-100 py-5">
    <a id="about"></a>
    <div class="about-content row">
        @include('blueprints.two-column-image-heading-paragraph', [
            'img1' => $data['profilePhoto'],
            'heading1' => $data['heading4'],
            'text' => $data['text1']
            ])
    </div>
</section>
<div class="compartir">
    <h4 class="mb-3">Share:</h4>
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}" target="_blank"
        rel="noopener nofollow">
        <i class="icon-facebook"></i>
    </a>
    <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}" target="_blank"
        rel="noopener nofollow">
        <i class="icon-twitter"></i>
    </a>
    <a href="https://pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}&media={{ $img }}&description={{ $descripcion }}"
        target="_blank" rel="noopener nofollow">
        <i class="icon-pinterest"></i>
    </a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ request()->fullUrl() }}&title={{ $titulo }}&summary={{ $descripcion }}&source=PachaMamaSpirit"
        target="_blank" rel="noopener nofollow">
        <i class="icon-linkedin"></i>
    </a>
    <a href="https://api.whatsapp.com/send?text={{ request()->fullUrl() }}" target="_blank"
        rel="noopener nofollow">
        <i class="icon-whatsapp"></i>
    </a>
</div>
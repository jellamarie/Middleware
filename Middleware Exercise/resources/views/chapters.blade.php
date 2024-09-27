@extends('components.Layout')

@section('content')
<div id="gfg-nuj-chapters-div">
    <div id="gfg-nuj-chapters-main-div" class="gfg-nuj-main-div">
        <div id="gfg-nuj-chapters-heading-div">
            <h2 id="gfg-nuj-chapters-heading">Chapters</h2>
            <!-- <a id="gfg-nuj-chapters-heading-button" href="" target="_blank">view all</a> -->
        </div>
        <div id="gfg-nuj-chapters-content-div">
            <div class="gfg-nuj-single-chapter-div chapter-0" onclick="handleChapterDownButtonClick(0)">
                <div class="gfg-nuj-single-chapter-heading-div">
                    <h3 class="gfg-nuj-single-chapter-title">HTML Basics</h3>
                    <p class="gfg-nuj-single-chapter-icon-heading">
                        <span class="gfg-nuj-single-chapter-icon gfg-nuj-single-chapter-icon-0">
                            <span style="transform: rotate(-90deg);"><i class="gfg-nuj-single-chapter-symbol"></i></span>
                        </span>
                    </p>
                </div>
                <div class="gfg-nuj-single-chapter-extra-content-div gfg-nuj-single-chapter-extra-content-div-0" style="max-height: 0px;">
                </div>
                <div class="gfg-nuj-single-chapter-hidden-div single-chapter-hidden-div-0" style="max-height: 279px;">
                    <a href="https://www.geeksforgeeks.org/html-introduction/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">HTML Introduction</p>
                    </a>
                    <a href="https://www.geeksforgeeks.org/html-basics/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">HTML Basics</p>
                    </a>
                    <a href="https://www.geeksforgeeks.org/html-layout/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">HTML Layout</p>
                    </a>
                    <a href="https://www.geeksforgeeks.org/html-editors/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">HTML Editors</p>
                    </a>
                    <a href="https://www.geeksforgeeks.org/html-comments/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">HTML Comments</p>
                    </a>
                </div>
            </div>
            <!-- Add more chapter blocks as needed following the same structure -->
            <div class="gfg-nuj-single-chapter-div chapter-1" onclick="handleChapterDownButtonClick(1)">
                <div class="gfg-nuj-single-chapter-heading-div">
                    <h3 class="gfg-nuj-single-chapter-title">HTML Basic Elements</h3>
                    <p class="gfg-nuj-single-chapter-icon-heading">
                        <span class="gfg-nuj-single-chapter-icon gfg-nuj-single-chapter-icon-1">
                            <span><i class="gfg-nuj-single-chapter-symbol"></i></span>
                        </span>
                    </p>
                </div>
                <div class="gfg-nuj-single-chapter-extra-content-div gfg-nuj-single-chapter-extra-content-div-1">
                </div>
                <div class="gfg-nuj-single-chapter-hidden-div single-chapter-hidden-div-1">
                    <a href="https://www.geeksforgeeks.org/html-heading/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">HTML Headings</p>
                    </a>
                    <a href="https://www.geeksforgeeks.org/html-paragraph/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">HTML Paragraphs</p>
                    </a>
                   
                </div>
            </div>
           
        </div>
    </div>
</div>

<script>
function handleChapterDownButtonClick(chapterIndex) {
    const hiddenDiv = document.querySelector(`.single-chapter-hidden-div-${chapterIndex}`);
    const extraContentDiv = document.querySelector(`.gfg-nuj-single-chapter-extra-content-div-${chapterIndex}`);

    if (hiddenDiv.style.maxHeight === '0px') {
        hiddenDiv.style.maxHeight = '500px'; 
        extraContentDiv.style.maxHeight = 'none';
    } else {
        hiddenDiv.style.maxHeight = '0px';
        extraContentDiv.style.maxHeight = '0px';
    }
}
</script>
@endsection

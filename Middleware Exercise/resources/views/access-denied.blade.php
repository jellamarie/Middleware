@extends('components.Layout')

@section('content')
<div id="gfg-nuj-chapters-div">
    <div id="gfg-nuj-chapters-main-div" class="gfg-nuj-main-div">
        <div id="gfg-nuj-chapters-heading-div">
            <h2 id="gfg-nuj-chapters-heading">Chapters</h2>
        </div>
        <div id="gfg-nuj-chapters-content-div">
            <div class="gfg-nuj-single-chapter-div chapter-0" onclick="handleChapterDownButtonClick(0)">
                <div class="gfg-nuj-single-chapter-heading-div">
                    <h3 class="gfg-nuj-single-chapter-title">HTML Basics</h3>
                    <p class="gfg-nuj-single-chapter-icon-heading">
                        <span class="gfg-nuj-single-chapter-icon gfg-nuj-single-chapter-icon-0">
                            <span style="transform: rotate(-90deg); transition: transform 0.3s ease;">
                                <i class="gfg-nuj-single-chapter-symbol">⮟</i>
                            </span>
                        </span>
                    </p>
                </div>
                <div class="gfg-nuj-single-chapter-extra-content-div gfg-nuj-single-chapter-extra-content-div-0" style="max-height: 0px;">
                    <p class="gfg-nuj-single-chapter-description">Learn the basics of HTML, including structure, elements, and how to create a simple web page. For more information, visit the <a href="https://www.geeksforgeeks.org/html-introduction/?ref=roadmap">HTML Introduction</a>.</p>
                    <ul class="gfg-nuj-single-chapter-takeaways">
                        <li>Understand the role of HTML in web development. Read more <a href="https://www.geeksforgeeks.org/html-introduction/?ref=roadmap">here</a>.</li>
                        <li>Learn about tags, elements, and document structure. Details <a href="https://www.geeksforgeeks.org/html-basics/?ref=roadmap">here</a>.</li>
                        <li>Explore the various types of HTML documents and their basic components.</li>
                        <li>Discover how to set up your first HTML document and use an HTML editor effectively.</li>
                    </ul>
                </div>
                <div class="gfg-nuj-single-chapter-hidden-div single-chapter-hidden-div-0" style="max-height: 0px;">
                    <a href="https://www.geeksforgeeks.org/html-introduction/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">1. HTML Introduction</p>
                    </a>
                    <a href="https://www.geeksforgeeks.org/html-basics/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">2. HTML Basics</p>
                    </a>
                    <a href="https://www.geeksforgeeks.org/html-layout/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">3. HTML Layout</p>
                    </a>
                    <a href="https://www.geeksforgeeks.org/html-editors/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">4. HTML Editors</p>
                    </a>
                    <a href="https://www.geeksforgeeks.org/html-comments/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">5. HTML Comments</p>
                    </a>
                </div>
            </div>
            <div class="gfg-nuj-single-chapter-div chapter-1" onclick="handleChapterDownButtonClick(1)">
                <div class="gfg-nuj-single-chapter-heading-div">
                    <h3 class="gfg-nuj-single-chapter-title">HTML Basic Elements</h3>
                    <p class="gfg-nuj-single-chapter-icon-heading">
                        <span class="gfg-nuj-single-chapter-icon gfg-nuj-single-chapter-icon-1">
                            <span style="transform: rotate(-90deg); transition: transform 0.3s ease;">
                                <i class="gfg-nuj-single-chapter-symbol">⮟</i>
                            </span>
                        </span>
                    </p>
                </div>
                <div class="gfg-nuj-single-chapter-extra-content-div gfg-nuj-single-chapter-extra-content-div-1" style="max-height: 0px;">
                    <p class="gfg-nuj-single-chapter-description">Explore the fundamental HTML elements used to build the structure of a web page, including headings and paragraphs. Read more about <a href="https://www.geeksforgeeks.org/html-elements/?ref=roadmap">HTML Elements</a>.</p>
                    <ul class="gfg-nuj-single-chapter-takeaways">
                        <li>Learn how to use headings to structure content. Find out more <a href="https://www.geeksforgeeks.org/html-heading/?ref=roadmap">here</a>.</li>
                        <li>Understand the importance of paragraphs for readability. More details <a href="https://www.geeksforgeeks.org/html-paragraph/?ref=roadmap">here</a>.</li>
                        <li>Get familiar with the use of lists (ordered and unordered) in HTML documents.</li>
                        <li>Discover how to format text using spans and divs for layout control.</li>
                    </ul>
                </div>
                <div class="gfg-nuj-single-chapter-hidden-div single-chapter-hidden-div-1" style="max-height: 0px;">
                    <a href="https://www.geeksforgeeks.org/html-heading/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">1. HTML Headings</p>
                    </a>
                    <a href="https://www.geeksforgeeks.org/html-paragraph/?ref=roadmap" class="gfg-nuj-single-track-div indexes-link" data-page-id="1">
                        <p class="gfg-nuj-single-track-title">2. HTML Paragraphs</p>
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
    const icon = document.querySelector(`.gfg-nuj-single-chapter-icon-${chapterIndex} span`);

    if (hiddenDiv.style.maxHeight === '0px' || hiddenDiv.style.maxHeight === '') {
        hiddenDiv.style.maxHeight = '500px'; 
        extraContentDiv.style.maxHeight = 'none';
        icon.style.transform = 'rotate(0deg)';
        hiddenDiv.scrollIntoView({ behavior: 'smooth', block: 'start' });
    } else {
        hiddenDiv.style.maxHeight = '0px';
        extraContentDiv.style.maxHeight = '0px';
        icon.style.transform = 'rotate(-90deg)';
    }
}
</script>
@endsection

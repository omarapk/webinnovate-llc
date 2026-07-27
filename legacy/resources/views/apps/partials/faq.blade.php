@php($faq = $app['faq'])
<div class="rbt-breadcrumb-default ptb--30 ptb_md--50 ptb_sm--30 bg-gradient-1">
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-inner text-center">
                <h2 class="title faqs-title" id="faq">{{ $faq['title'] }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="rbt-accordion-area accordion-style-1 bg-color-white rbt-section-gap" >
    <div class="container">
        <div class="row g-5">
            @foreach ($faq['columns'] as $colIndex => $column)
                <div class="col-lg-6">
                    <div class="rbt-accordion-style accordion">
                        <div class="rbt-accordion-style rbt-accordion-04 accordion">
                            <div class="accordion" id="faqAccordionCol{{ $colIndex }}">
                                @foreach ($column as $qIndex => $item)
                                    @php($itemId = 'faqCol'.$colIndex.'Item'.$qIndex)
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="{{ $itemId }}Heading">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $itemId }}Collapse" aria-expanded="false" aria-controls="{{ $itemId }}Collapse">
                                                {{ $item['q'] }}
                                            </button>
                                        </h2>
                                        <div id="{{ $itemId }}Collapse" class="accordion-collapse collapse" aria-labelledby="{{ $itemId }}Heading" data-bs-parent="#faqAccordionCol{{ $colIndex }}">
                                            <div class="accordion-body card-body">
                                                {{ $item['a'] }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

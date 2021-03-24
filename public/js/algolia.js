(function() {
    const searchClient = algoliasearch(
        'RQOGHGD8DV',
        'f2d4291cc97a520192a977e7b9324426'
    );

    /* Autocomplete */

    /*const autocomplete = instantsearch.connectors.connectAutocomplete(
        ({ indices, refine, widgetParams }, isFirstRendering) => {
            const { container, onSelectChange } = widgetParams;

            if (isFirstRendering) {
                container.html('<select id="ais-autocomplete"></select>');

                container.find('select').selectize({
                    options: [],
                    valueField: 'name',
                    labelField: 'name',
                    highlight: false,
                    onType: refine,
                    onBlur() {
                        refine(this.getValue());
                    },
                    score() {
                        return function() {
                            return 1;
                        };
                    },
                    onChange(value) {
                        onSelectChange(value);
                        refine(value);
                    },
                });

                return;
            }

            const [select] = container.find('select');

            indices.forEach(index => {
                select.selectize.clearOptions();
                index.results.hits.forEach(h => select.selectize.addOption(h));
                select.selectize.refreshOptions(select.selectize.isOpen);
            });
        }
    );*/

    const search = instantsearch({
        indexName: 'products',
        searchClient,
    });

    search.addWidgets([
        instantsearch.widgets.searchBox({
            container: '#searchbox',
            placeholder: 'Search for vacations',
            autofocus: true,

        }),
        instantsearch.widgets.configure({
            hitsPerPage: 8,
        }),
        instantsearch.widgets.hits({
            container: '#hits',
            templates: {
                item: `
        <div>
            <a href="/{{route('shop.show', $product->slug)}}">
                <div>
                      <header class="hit-name text-lg">
                        {{#helpers.highlight}}{ "attribute": "name" }{{/helpers.highlight}}
                      </header>
                      <p class="hit-description">
                        {{#helpers.highlight}}{ "attribute": "description" }{{/helpers.highlight}}
                      </p>
                      <div class="text-medium flex flex-row text-xl">
                          <p class="hit-price">
                            {{#helpers.highlight}}{ "attribute": "price" }{{/helpers.highlight}}
                          </p>
                          <p class="pl-2">$</p>
                      </div>
                </div>
            </a>
        </div>

      `,
            },
        }),
    ]);

    /* Suggestions */

    const suggestions = instantsearch({
        indexName: 'products',
        searchClient,
    });

    suggestions.addWidgets([
        instantsearch.widgets.configure({
            hitsPerPage: 5,
        }),
        /*autocomplete({
            container: $('#autocomplete'),
            onSelectChange(value) {
                search.helper.setQuery(value).search();
            },
        }),*/
    ]);


    /* Pagination */

    // Create the render function
    const renderPagination = (renderOptions, isFirstRender) => {
        const {
            pages,
            currentRefinement,
            nbPages,
            isFirstPage,
            isLastPage,
            refine,
            createURL,
        } = renderOptions;

        const container = document.querySelector('#pagination');

        container.innerHTML = `
    <ul class="flex flex-row justify-center p-4 gap-3">
      ${
            !isFirstPage
                ? `
            <li class="hover:bg-indigo-500 hover:text-white px-2 rounded">
              <a
                href="${createURL(currentRefinement - 1)}"
                data-value="${currentRefinement - 1}"
              >
                Previous
              </a>
            </li>
            `
                : ''
        }
      ${pages
            .map(
                page => `
            <li class="hover:bg-indigo-500 hover:text-white px-2 rounded">
              <a
                href="${createURL(page)}"
                data-value="${page}"
                style="font-weight: ${currentRefinement === page ? 'bold' : ''}"
              >
                ${page + 1}
              </a>
            </li>
          `
            )
            .join('')}
        ${
            !isLastPage
                ? `
              <li class="hover:bg-indigo-500 hover:text-white px-2 rounded">
                <a
                  href="${createURL(currentRefinement + 1)}"
                  data-value="${currentRefinement + 1}"
                >
                  Next
                </a>
              </li>
              `
                : ''
        }
    </ul>
  `;

        [...container.querySelectorAll('a')].forEach(element => {
            element.addEventListener('click', event => {
                event.preventDefault();
                refine(event.currentTarget.dataset.value);
            });
        });
    };

    // Create the custom widget
    const customPagination = instantsearch.connectors.connectPagination(
        renderPagination
    );

    // Instantiate the custom widget
    search.addWidgets([
        customPagination({
            container: document.querySelector('#pagination'),
        })
    ]);



    suggestions.start();
    search.start();
})();

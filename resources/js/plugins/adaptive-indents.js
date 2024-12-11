

export default function adaptiveIndents({excludeSelectors, unit, breakpoints}) {

    let adaptiveIndents = document.createElement('style');

    adaptiveIndents.classList.add('adaptive-indents');
    document.head.append(adaptiveIndents);

    // window.addEventListener('load', () => {

        let data = {},
            selectorClass = [],
            count = 0,
            paddingTop = 0, paddingBottom = 0,
            marginTop = 0, marginBottom = 0,
            baseFontSize = 1;


        if(unit === 'rem')
            baseFontSize =
                parseInt(window.getComputedStyle(document.querySelector('html')).fontSize);



        document.querySelectorAll(`body *:not(${excludeSelectors})`).forEach((element) => {

            selectorClass[count] = element.classList[0];

            // Exclude the element with empty class
            if(selectorClass[count] === undefined)
                return true;
            // ------

            paddingTop =
                parseFloat(window.getComputedStyle(element).paddingTop);

            paddingBottom =
                parseFloat(window.getComputedStyle(element).paddingBottom);

            marginTop =
                parseFloat(window.getComputedStyle(element).marginTop);

            marginBottom =
                parseFloat(window.getComputedStyle(element).marginBottom);


            // Exclude the element with empty margin and padding
            if(!(paddingTop || paddingBottom || marginTop || marginBottom))
                return true;


            // Exclude the repeat class
            for(let i = 0; i < count; i++) {

                if(selectorClass[i] === selectorClass[count])
                    return true;
            }
            // --------

            Object.keys(breakpoints).forEach((key) => {

                if(key !== '0') {
                    data.mediaBegin = `@media (min-width: ${key}px) { `;
                    data.mediaEnd = '}'
                } else {
                    data.mediaBegin = '';
                    data.mediaEnd = ''
                }


                if(paddingTop) {

                    data['paddingTop'+key] =
                        'padding-top: ' +
                        Math.round(paddingTop - (breakpoints[key] * paddingTop) / 100) / baseFontSize +
                        `${unit} !important; `;
                } else
                    data['paddingTop'+key] = '';

                if(paddingBottom) {

                    data['paddingBottom'+key] =
                        'padding-bottom: ' +
                        Math.round(paddingBottom - (breakpoints[key] * paddingBottom) / 100) / baseFontSize +
                        `${unit} !important; `;
                } else
                    data['paddingBottom'+key] = '';

                if(marginTop) {

                    data['marginTop'+key] =
                        'margin-top: ' +
                        Math.round(marginTop - (breakpoints[key] * marginTop) / 100) / baseFontSize +
                        `${unit} !important; `;
                } else
                    data['marginTop'+key] = '';

                if(marginBottom) {

                    data['marginBottom'+key] =
                        'margin-bottom: ' +
                        Math.round(marginBottom - (breakpoints[key] * marginBottom) / 100) / baseFontSize +
                        `${unit} !important; `;
                } else
                    data['marginBottom'+key] = '';


                document.querySelector('.adaptive-indents').append(
                    data.mediaBegin +
                    '.' + selectorClass[count] + ' { ' +
                    data['paddingTop'+key] +
                    data['paddingBottom'+key] +
                    data['marginTop'+key] +
                    data['marginBottom'+key] +
                    '}' +
                    data.mediaEnd
                );
            })

            data = {};
            ++count;
            paddingTop = paddingBottom = marginTop = marginBottom = 0;
        })
    //})

}

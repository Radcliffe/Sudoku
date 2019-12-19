$(document).ready(() => {
    const success = $('#success');
    const input = $('input');
    const reset = $('#reset');
    const cheat = $('#cheat');
    input.val('');
    $.get("/api/sudoku", params, function(data, status){
        if (data.puzzle && data.puzzle.length === 81) {
            for (let i = 0; i < 81; i++) {
                let v = data.puzzle[i];
                if (v !== '0') {
                    $(`input[data-index='${i}']`)
                        .val(v)
                        .attr('readonly', 'readonly');
                }
            }

            $(document).on('change', 'input', (e) => {
                // validate input
                const target = $(e.target);
                const val = target.val();
                if (val < '1' || val > '9' || val.length > 1) {
                    target.val('');
                }
                // check for complete solution
                for (let i = 0; i < 81; i++) {
                    if ($(`input[data-index='${i}']`).val() !== data.solution[i]) {
                        success.hide();
                        return false;
                    }
                }
                success.show();
                input.attr('readonly', 'readonly');
            });

            reset.click((e) => {
                e.preventDefault();
                success.hide();
                input.attr('readonly', 'readonly');
                for (let i = 0; i < 81; i++) {
                    if (data.puzzle [i] === '0') {
                        $(`input[data-index='${i}']`).val('').removeAttr('readonly');
                    }
                }
            });

            cheat.click((e) => {
                for (let i = 0; i < 81; i++) {
                    $(`input[data-index='${i}']`).val(data.solution[i]).attr('readonly', 'readonly');
                }
            })
        }
    });
});

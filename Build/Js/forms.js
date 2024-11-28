$(function () {
    formSelectStyle();
    formsValidation();
});


function formsValidation() {
    jQuery.each($('.needs-validation'), function (index, form) {
        var submitButton = $(form).find('input[type=submit]')[0];
        $(submitButton).click(function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            $(form).addClass('was-validated');
        });
    })
}



// Function for styling form dropdown select
function formSelectStyle() {
    // Get all select elements and add the custom select wrapper
    $('select').each(function () {
        var $select = $(this);
        var $parent = $select.parent();
        var $wrapper = $('<div>', { class: 'custom-select' });
        $wrapper.insertBefore($select).append($select);
    });

    selectStyle();
}

// Function for styling select options in forms
function selectStyle() {
    // Find all custom-select elements
    $(".custom-select").each(function () {
        var $customSelect = $(this);
        var $select = $customSelect.find("select");
        var $selectedDiv = $('<div>', { class: 'select-selected', text: $select.find(':selected').text() });
        var $optionsDiv = $('<div>', { class: 'select-items select-hide' });

        // Populate options
        $select.find('option').each(function () {
            var $option = $(this);
            var $optionDiv = $('<div>', {
                class: $option.val() === 'none' ? 'placeholder' : 'option',
                text: $option.text()
            });

            if ($option.val() === 'none' || !$option.val()) {
                $optionDiv.css('display', 'none');
            }

            $optionDiv.on('click', function () {
                $select.prop('selectedIndex', $option.index());
                $selectedDiv.text($option.text()).addClass('select-arrow-active');
                $optionsDiv.find('.same-as-selected').removeClass('same-as-selected');
                $optionDiv.addClass('same-as-selected');

                // Validate and remove class if not empty
                if ($select.val() !== '') {
                    $customSelect.removeClass('novalid');
                }

                $selectedDiv.trigger('click');
            });

            $optionsDiv.append($optionDiv);
        });

        $customSelect.append($selectedDiv, $optionsDiv);

        // Add click handler to toggle options
        $selectedDiv.on('click', function (e) {
            e.stopPropagation();
            closeAllSelect($selectedDiv[0]);
            $optionsDiv.toggleClass('select-hide');
            $selectedDiv.toggleClass('select-arrow-active');
            $customSelect.toggleClass('active');
        });
    });

    // Handle selected items and scroll position
    keepSelectedItem();
    selectSpecificMembers();

    // Close all select boxes when clicking outside
    $(document).on('click', closeAllSelect);
}

// Keep the selected item visually updated
function keepSelectedItem() {
    $("option:selected").each(function () {
        var $selected = $(this);
        var $customSelect = $selected.closest('.custom-select');
        var $options = $customSelect.find('.select-items .option');
        var selectedText = $selected.text();

        $options.each(function () {
            var $option = $(this);
            if ($option.text() === selectedText) {
                $option.addClass('same-as-selected');
            }
        });

        // Scroll to the correct position
        var index = $selected.index();
        var scrollPosition = (index - 2) * 50.89;
        $customSelect.find('.select-items').scrollTop(scrollPosition);
    });
}

// Style specific members
function selectSpecificMembers() {
    $(".filter-member-list .custom-select .select-items").each(function () {
        var $selectItems = $(this);
        var $firstChild = $selectItems.children().eq(0);
        var $selectedItem = $selectItems.siblings('.select-selected');
        var $searchButton = $(".filter-member-list").find("#searchbutton");

        $firstChild.hide();

        $selectItems.on('click', function () {
            if ($selectedItem.text() === $firstChild.text()) {
                $firstChild.hide();
            } else {
                $firstChild.show();
            }
        });

        if ($selectedItem.text() === $firstChild.text() && $searchButton.val() === '1') {
            $firstChild.hide();
        } else {
            $firstChild.show();
        }

        if (performance.navigation.type === performance.navigation.TYPE_RELOAD) {
            $firstChild.toggle($selectedItem.text() !== $firstChild.text());
        }
    });
}

// Close all select boxes except the current one
function closeAllSelect(except) {
    $(".select-items").not($(except).siblings('.select-items')).addClass("select-hide");
    $(".select-selected").not(except).removeClass("select-arrow-active");
    $(".custom-select").not($(except).parent()).removeClass("active");
}

// Initialize form select style
$(document).ready(function () {
    formSelectStyle();
});

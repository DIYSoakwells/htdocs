    var items_array = [
        {
            name: '140 Litre Polypropylene Soakwell',
            price: '59.95',
            quantity: 1
        },
        {
            name: '130 Litre Polypropylene Soakwell',
            price: '49.95',
            quantity: 1
        }
    ];
    function add_item( item_number, quantity_id ) {

        var item = simpleCart.add( items_array[ item_number ] );

        document.getElementById( quantity_id ).innerHTML = item.quantity();

    }
const productType = document.querySelector('#productType');
    const changingInputs = document.querySelector('#changingInputs');

    const productTypeInfo = {
        dvd: {
            type: 'dvd',
            unit: 'MB',
            attributes: ['size']
        },
        furniture: {
            type: 'furniture',
            unit: 'CM',
            attributes: ['height', 'width', 'length']
        },
        book: {
            type: 'book',
            unit: 'KG',
            attributes: ['weight']
        }
    }

    productType.addEventListener('change', function() {
        const productType = productTypeInfo[this.value];
        changingInputs.innerHTML = makeInputFields(productType);
    })

    function makeInputFields(obj){
        let inputs = ``;
        for(let i = 0; i < obj.attributes.length; i++){
            inputs += `<label for=${obj.attributes[i]}>${obj.attributes[i]} ${obj.unit}</label>
        <input type="number" min='0' class="form-control" id=${obj.attributes[i]} name=${obj.attributes[i]} placeholder=${obj.attributes[i]} required/>`;
        }
        return inputs;
    }

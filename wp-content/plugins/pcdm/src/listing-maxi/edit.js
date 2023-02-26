import {InspectorControls} from '@wordpress/block-editor';
import {RangeControl} from '@wordpress/components';

export default function Edit({attributes, setAttributes}) {

    const {nbElements, elements} = attributes;
    let lastNBElements = 1;
    const onNbElementsChange = (nb) => {
        if (lastNBElements < nb) {
            elements.push({
                icone: '',
                pretitle: 'PreTitle',
                title: 'Title',
                content: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facilis, voluptates error alias dolorem praesentium sit soluta iure incidunt labore explicabo eaque, quia architecto veritatis dolores, enim cons equatur nihil ipsum.'
            });
            console.log('last < nb');
        } else if (lastNBElements >= nb) {
            console.log('last > nb');
            elements.pop();
        }
        lastNBElements = nb;
        setAttributes({nbElements: nb});
        console.log(lastNBElements);
    };

    return (
        <>
            <InspectorControls>
                <RangeControl
                    label="Columns"
                    value={nbElements}
                    onChange={onNbElementsChange}
                    min={1}
                    max={10}
                />
            </InspectorControls>
            {
                elements.map((element, i) => {
                    return (
                        <div key={i}>
                            <p>{element.pretitle}</p>
                            <h3>{element.title}</h3>
                            <div>{element.content}</div>
                        </div>
                    );
                })
            }
        </>
    );
}

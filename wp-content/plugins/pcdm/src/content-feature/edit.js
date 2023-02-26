import {InspectorControls, RichText, useBlockProps} from '@wordpress/block-editor';
import {PanelBody, RangeControl} from '@wordpress/components';

export default function Edit({attributes, setAttributes}) {

    const blockProps = useBlockProps();
    const {contentTitle, contentBody, contentContents} = attributes;

    const setContentsSize = (e) => {
        if (contentContents.length < e) {
            setAttributes({
                contentContents: [...contentContents, {
                    h3: 'Lorem ipsum dolor',
                    p: '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facilis, voluptates error alias dolorem.</p>'
                }]
            });
        } else if (contentContents.length > e) {
            contentContents.pop();
            setAttributes({
                contentContents: [...contentContents]
            });
        }
    };

    const setContentsContentH3Change = (h3, i) => {
        contentContents[i] = {...contentContents[i], h3: h3};
        setAttributes({
            contentContents: [...contentContents]
        });
    };

    const setContentsContentContentChange = (content, i) => {
        contentContents[i] = {...contentContents[i], p: content};
        setAttributes({
            contentContents: [...contentContents]
        });
    };

    const removeContentsContent = (i) => {
        contentContents.splice(i, 1);
        setAttributes({
            contentContents: [...contentContents]
        });
        return;
    };

    return (
        <>
            <InspectorControls>
                <PanelBody
                    title="Personnaliser la liste des Features"
                    initialOpen={true}
                >
                    <RangeControl
                        label="Nombre"
                        value={contentContents.length}
                        onChange={setContentsSize}
                        min={1}
                        max={4}
                    />
                </PanelBody>
            </InspectorControls>

            <section {...blockProps}>
                <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <RichText
                            value={contentTitle}
                            onChange={(contentTitle) => setAttributes({contentTitle: contentTitle})}
                            tagName="h2"
                            allowedFormats={['core/bold', 'core/italic']}
                            placeholder="Votre titre de section"
                        />
                        <RichText
                            value={contentBody}
                            onChange={(contentBody) => setAttributes({contentBody: contentBody})}
                            tagName="div"
                            multiline="p"
                            className="my-4 leading-loose text-gray-500"
                            allowedFormats={['core/bold', 'core/italic']}
                            placeholder="Votre texte"
                        />
                    </div>

                    <div className="grid grid-cols-1 gap-y-4">
                        {contentContents.map((content, i) =>
                            (
                                <div key={i} className="flex flex-row gap-x-4">
                                    <div
                                        className="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-brand-500 rounded-full bg-brand-50">
                                        <span className="!text-inherit">{i + 1}</span>
                                    </div>
                                    <div className="flex-1">
                                        <RichText
                                            value={content.h3}
                                            onChange={(content) => setContentsContentH3Change(content, i)}
                                            tagName="h3"
                                            className="my-4"
                                            allowedFormats={['core/bold', 'core/italic']}
                                            placeholder="Votre titre de sous section"
                                        />

                                        <RichText
                                            value={content.p}
                                            onChange={(content) => setContentsContentContentChange(content, i)}
                                            tagName="div"
                                            className="leading-loose text-gray-500"
                                            multiline="p"
                                            allowedFormats={['core/bold', 'core/italic']}
                                            placeholder="Votre texte"
                                        />
                                    </div>
                                    {(contentContents.length > 1) ?
                                        <div onClick={() => removeContentsContent(i)}
                                             className="cursor-pointer font-bold">x</div> : ''}
                                </div>
                            )
                        )}
                    </div>
                </div>
            </section>
        </>
    )
        ;
}

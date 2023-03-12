import {RichText, useBlockProps} from '@wordpress/block-editor';

export default function save({attributes}) {

    const blockProps = useBlockProps.save();

    const {preTitle, contentTitle, contentBody, settings} = attributes;
    const {showPreTitle} = settings;

    return (
        <div className="container">
            {showPreTitle ? <RichText.Content className="pre-title !text-center" value={preTitle} tagName="p"/> : ''}
            <RichText.Content
                className="!text-center"
                tagName="h2"
                value={contentTitle}
            />
            <RichText.Content
                tagName="div"
                className="cadre-body !text-center mt-5"
                value={contentBody}
            />
        </div>
    );
}

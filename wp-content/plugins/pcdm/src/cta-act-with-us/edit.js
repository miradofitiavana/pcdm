import {__} from '@wordpress/i18n';
import {InspectorControls, useBlockProps} from '@wordpress/block-editor';
import {PanelBody, PanelRow, QueryControls, RangeControl} from '@wordpress/components';
import {useSelect} from '@wordpress/data';
import {RawHTML} from '@wordpress/element';

export default function Edit({attributes, setAttributes}) {

    const {
        numberOfItems, columns
    } = attributes;

    const {posts} = useSelect((select) => {
        const categories = select('core').getEntityRecords('taxonomy', 'category', {
            'slug': 'agir-avec-nous'
        });

        let posts = [];
        let category = null;
        if (categories && categories.length === 1) {
            category = categories[0].id;

            posts = select('core').getEntityRecords('postType', 'post', {
                'per_page': -1, '_embed': true, 'categories': [category]
            });
        }
        return {
            posts: posts
        };
    }, [numberOfItems]);
    return (<>
        <InspectorControls>
            <PanelBody title={__('Content Settings', 'author-plugin')}>
                <PanelRow>
                    <QueryControls
                        numberOfItems={numberOfItems}
                        onNumberOfItemsChange={(value) => setAttributes({numberOfItems: value})}
                        minItems={1}
                        maxItems={5}
                    />
                </PanelRow>
                <PanelRow>
                    <RangeControl
                        label={__('Number of Columns', 'author-plugin')}
                        value={columns}
                        onChange={(value) => setAttributes({columns: value})}
                        min={1}
                        max={5}
                        required
                    />
                </PanelRow>
            </PanelBody>
        </InspectorControls>
        <div className="w-full" {...useBlockProps()}>
            <ul className={`wp-block-pcdm-cta-act-with-us__post-items columns-${columns} grid items-center md:items-start grid-cols-1 sm:grid-cols-3 md:grid-cols-5 gap-4`}>
                <li className="md:col-span-5 !text-center font-bold uppercase">Agissez avec nous</li>
                {posts && posts.map((post) => {
                    return (<li key={post.id}>
                        <a href={post.link} className="!text-xs wp-block-pcdm-cta-act-with-us__post-title !text-center">
                            <img className="h-20"/>
                            <span className="btn btn--border">{post.title.rendered ? (<RawHTML>{post.title.rendered}
                            </RawHTML>) : (__('Default title', 'author-plugin'))}
                                    </span>
                        </a>
                    </li>);
                })}
            </ul>
        </div>
    </>);
}

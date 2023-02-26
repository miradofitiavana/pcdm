export default function Edit() {
    return (
        <>
            <section className="py-24">
                <div className="container">
                    <div
                        className="px-8 py-6 lg:px-24 lg:py-12 bg-secondary-100 rounded-container grid grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-12"
                        style={{backgroundImage: `url(${'/../wp-content/themes/pcdm/assets/images/footer-bg.jpg'})`}}>
                        <div>
                            <span
                                className="text-lg font-bold text-primary-500">Agir pour les Petits Coeurs du Monde</span>
                            <h2 className="text-4xl text-brand-500 mt-1">Plus qu'un donateur, devenez ACTEUR du
                                CHANGEMENT</h2>
                        </div>
                        <div>
                            <p className="text-lg font-bold text-brand-500">Une bibliothèque pour tous</p>
                            <p className="text-2xl font-bold">€ 2900</p>
                            <div className="w-full bg-secondary-500 rounded-full my-4 h-5">
                                <div
                                    className="bg-brand-500 h-5 text-xs font-medium text-white text-center p-0.5 leading-none rounded-l-full flex items-center justify-center font-bold"
                                    style={{width: '25%'}}> 25%
                                </div>
                            </div>
                            <a href="#" className="btn btn--max w-full lg:w-auto">Faire un don</a>
                        </div>
                    </div>
                </div>
            </section>
        </>
    );
}

import React from 'react'

export default function page() {
    return (
        <div>


            <div className="py-14 mt-16">
                <div className="text-center text-4xl font-semibold tracking-wide">
                    <p>Our <span className='text-blue-500'>Cars</span></p>
                </div>

                <div className="flex gap-10 mt-16 items-center justify-center flex-wrap">

                    {/* -------------------------------------------------------------------------------------------------------------------------------------- */}

                    <div className='flex gap-2 overflow-hidden flex-col justify-between h-96 w-80 rounded-lg border border-slate-500'>
                        <div className="p-3">
                            <img src="/car.png" alt="" />
                        </div>
                        <div className="p-4 bg-stone-100">
                            <p className='text-2xl font-semibold pb-3'>Scorpio</p>
                            <p>This is a 6 sitter sports car</p>
                            <p className='flex gap-3 items-center mt-3'>
                                <span>20000</span>
                                <i className="bi bi-currency-rupee"></i></p>

                            <button className='bg-amber-400 px-5 py-1.5 text-white font-semibold mt-3 rounded-md'>See Details</button>

                        </div>
                    </div>


                    <div className='flex gap-2 overflow-hidden flex-col justify-between h-96 w-80 rounded-lg border border-slate-500'>
                        <div className="p-3">
                            <img src="/car.png" alt="" />
                        </div>
                        <div className="p-4 bg-stone-100">
                            <p className='text-2xl font-semibold pb-3'>Scorpio</p>
                            <p>This is a 6 sitter sports car</p>
                            <p className='flex gap-3 items-center mt-3'>
                                <span>20000</span>
                                <i className="bi bi-currency-rupee"></i></p>

                            <button className='bg-amber-400 px-5 py-1.5 text-white font-semibold mt-3 rounded-md'>See Details</button>

                        </div>
                    </div>


                    <div className='flex gap-2 overflow-hidden flex-col justify-between h-96 w-80 rounded-lg border border-slate-500'>
                        <div className="p-3">
                            <img src="/car.png" alt="" />
                        </div>
                        <div className="p-4 bg-stone-100">
                            <p className='text-2xl font-semibold pb-3'>Scorpio</p>
                            <p>This is a 6 sitter sports car</p>
                            <p className='flex gap-3 items-center mt-3'>
                                <span>20000</span>
                                <i className="bi bi-currency-rupee"></i></p>

                            <button className='bg-amber-400 px-5 py-1.5 text-white font-semibold mt-3 rounded-md'>See Details</button>

                        </div>
                    </div>

                    {/* -------------------------------------------------------------------------------------------------------------------------------------- */}


                </div>

            </div>


        </div>
    )
}

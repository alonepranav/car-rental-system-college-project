import React from 'react'

export default function page() {
    return (
        <div className='p-32'>
            <form action="" className=''>
                <p className='text-3xl font-semibold'>Book Car</p>

                <div className="flex flex-col gap-3 mt-10">
                    <div className="mb-7">
                        <p className='font-semibold text-2xl mb-2'>Scorpio - n90</p>
                        <p className='text-xl'>Rent : 20000 /- per day</p>
                    </div>

                    <div className="flex flex-col gap-1">
                        <label>Customer Name</label>
                        <input
                            required
                            name='customer_name'
                            type="text"
                            className='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                    </div>

                    <div className="flex flex-col gap-1">
                        <label>Customer Email</label>
                        <input
                            required
                            name='customer_email'
                            type="email"
                            className='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                    </div>


                    <div className="flex flex-col gap-1">
                        <label>Customer Address</label>
                        <input
                            required
                            name='customer_address'
                            type="text"
                            className='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                    </div>


                    <div className="flex justify-center mt-6 mb-4">
                        <button className='py-1.5 px-8 border bg-blue-500 text-white font-semibold border-slate-400 rounded-md outline-none'>Book Car</button>
                    </div>

                </div>


            </form>
        </div>
    )
}

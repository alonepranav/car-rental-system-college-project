import React from 'react'

export default function page() {
    return (
        <div className='min-h-screen w-screen flex justify-center items-center pt-32 pb-10'>
            <form className="rounded-2xl w-2/4 px-5 py-7 border border-slate-400">
                <p className='text-3xl font-semibold text-center'>Add Car</p>

                <div className="flex flex-col gap-3 mt-10">

                    <div className="flex flex-col gap-1">
                        <label>Car Name</label>
                        <input
                            required
                            name='car_name'
                            type="text"
                            className='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                    </div>

                    <div className="flex flex-col gap-1">
                        <label>Car Model</label>
                        <input
                            required
                            name='car_model'
                            type="text"
                            className='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                    </div>

                    <div className="flex flex-col gap-1">
                        <label>Car Type</label>
                        <select 
                            name='car_type'
                            id="" className='py-2 px-3 w-full border border-slate-400 rounded-md outline-none'>
                            <option value="sports">Sports</option>
                            <option value="luxorious">Luxorious</option>
                            <option value="vintage">Vintage</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div className="flex flex-col gap-1">
                        <label>Car Info</label>
                        <input
                            required
                            name='car_info'
                            type="text"
                            className='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                    </div>

                    <div className="flex flex-col gap-1">
                        <label>Car Rent / Day</label>
                        <input
                            required
                            name='car_rent'
                            type="text"
                            className='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                    </div>

                    <div className="flex flex-col gap-1">
                        <label>Car Image</label>
                        <input
                            required
                            name='car_image'
                            type="file"
                            className='py-2 px-3 w-full border border-slate-400 rounded-md outline-none' />
                    </div>

                    <div className="flex justify-center mt-6 mb-4">
                        <button className='py-1.5 px-8 border bg-blue-500 text-white font-semibold border-slate-400 rounded-md outline-none'>Add Car</button>
                    </div>

                </div>
            </form>
        </div>
    )
}

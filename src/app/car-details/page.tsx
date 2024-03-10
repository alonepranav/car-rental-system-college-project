import React from 'react'

export default function page() {
    return (
        <div>
            <br />
            <br />
            <br />
            <br />

            <div className="flex justify-center">
                <img src="/car.png" alt="" />
            </div>

            <div className="px-40 pt-5">
                <p className='text-3xl font-semibold'>Scorpio ( asd )</p>
                <p className='mt-5 text-stone-600 text-lg'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut animi asperiores reiciendis dolorum sunt reprehenderit numquam maiores accusantium vero amet?</p>

                <div className="flex gap-3 items-center mt-7">
                    <span>Rent : </span>
                    <p className='border border-slate-400 rounded-md w-fit px-10 py-2'>20,000 /-</p>
                </div>

                <div className="px-7 py-2 flex justify-center items-center mt-10">
                    <a
                        href=''
                        className='w-fit px-20 bg-blue-500 py-2 text-white font-semibold tracking-wider rounded-md hover:bg-blue-600'>
                        Book Now
                    </a>
                </div>

            </div>
        </div>
    )
}

import React from 'react'

export default function Navbar() {

    return (
        <div className='flex justify-center items-center fixed mt-2 top-0 left-0 w-screen'>
            <div className=" w-3/4 bg-slate-200 rounded-full flex py-3 px-10 justify-between items-center backdrop-blur-md bg-transparent border border-slate-700">

                <div className="font-semibold text-xl">CAR</div>

                <ul className='flex gap-20 items-center'>
                    <a href="/">Home</a>
                    <a href="about">About</a>
                    <a href="/cars">Cars</a>
                    <a href="/contact">Contact</a>
                    <a href="/admin">Admin</a>
                </ul>

            </div>
        </div>
    )
}

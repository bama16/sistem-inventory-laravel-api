<aside id="sidebar">
    <!-- Content Sidebar -->
    <div class="h-100">
        <div style="height: 90px; padding-top:25px; padding-left:8px;" class="sidebar-logo">
        {{-- <enter><img src="/images/gudang.gif" width="200px"/></enter> --}}
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="{{ route('dashboard', ['role' => Auth::user()->roles]) }}" class="sidebar-link">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style="fill:#ffffff">
                        <path d="M 12 2.0996094 L1 12 L4 12 L4 21 L 10 21 10 14 L 14 14 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 Z"></path>
                    </svg>
                    Dashboard
                </a>
                <li class="sidebar-item">
                    <a href="{{ route('laporanbarang.index') }}" class="sidebar-link">
                        <img width="24" height="24" src="/images/laporan.png" alt="truck" style="margin-right: 2px; margin-left: 1px;"/>
                        Laporan Barang
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('laporansupplier.index') }}" class="sidebar-link">
                        <img width="24" height="24" src="/images/truck.png" alt="truck" style="margin-right: 2px; margin-left: 1px;"/>
                        Laporan Supplier
                    </a>
                </li>
            </li>
        </ul>
    </div>
</aside>
<?php

use App\Qr;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@ngevent.xyz',
            'password' => Hash::make('password'),
        ]);
        //create qrs
        Qr::truncate();
        $qrs = 'yyyyf788u99,yyik998uj7,yyol335tytt6,yyp09oi8uu,yyhh6ytt5r,yyy78u7yt6,yytt6yy5r4,yytt6yjikt,yy77u88i9m,yy77u8lpp,yy77u8lqq,yy77gg655,yyhu711q2,yyy7uhc112,yyy7u5xx,yyy7u5xxqp,yyvzvzx221,r5tt4e3qw,r5ttqwqw,r5ttzx116,ase334rqw,as8i9o90p,asgh665te,asg8i6yyr3,y6y7ue8u,ukd88id4t,hjns778jy,hjns770ll,hu778usi9,nmzz788xzx,nmzz788,nmzz788000,fr55t6y7,bnnz889z0
        ,bnnz8mkx9,bnnz8wq78,9906yuuy,909ok6112,9097uu8ii,mnx6hss7,gthgs677s,u8iw7765w,u8iwty65,u8iwty9090,u8ihn7665,u8iolbbt,u8iotgg5,u8io89r4,u8io89r4fc56,nmuu87r43w,nko34czz1f6g,ny7345fercvb,nycb45wesdasm,ny4567zxasqwefg,ny4i3h36hd7jsgd,bhs7hyw54wr3qd2jhw8s,bhs7hyw5mn,rt5w4fr23wq34,tygw5gv4bsn9,tygweq3wqe4,hzsca5AS7W8,tsg67WWEXD32u,tsVHBynNU67F54,ascr4rdfrfgGGTfc56,ghsjaHFGYUVHJ67687,trhFVgc6cT3dr4RT,UYtgF5f6GT7uH23dJqWxw,sdEDws345F2dFYU,VbGBhjHYh67654G513DQ,HSDrVRTvy56TRFV2133h,gv5667H76UU77,VHGvegGG5R64f5,HSJuhyHgfd5656G7YU,bgtbhFT5t6TR68K98,VGVgbHhBg676hq1q1p,DXSsEeD345T67y7u8U,hyH78i4567hgQWEca,cDcDcrgFW346g7hB,cDcDcrgFW34676723456,HgVTt5646tfR4fTE6yt,bhjhufhjFGthhJ6621cxxX,ghYh6UY57B67YRTyHYT,hnYUgY6yy7677uU89777,jfFYT567r5ygYguu8U8L,bFgGHhBh66521EG,nhTGVfvGdFV54VR1DFQB3ZS,dwsSWwwsdQAqzhg87q,HhFWfGf468JI8JRRqj2,FRXD34qqadsW11Q,FRXerfrfg51123qw,CfdSfTV5670077kQ,njHUjj667YJi22,ghgJkk908JH6H6hjhjj,SDCEDtg5611bhsw0n0o,Xdxzsdgay4323dgfg12,AsAW21A12awe4887,xbyhg45g666tfqQQ,swRD342SSaq12,hGhft674Qw4FZZ12,YHqwszgfdse5678,YHqwszgRTG51200,123SWEqaZXXcg,WED128735f44rrtT,WFhhYYtH6670911,gyf5611209Nc,WE11095632qwJ,660OBJ2XQAZqsx,6tc2mV1Q2,GTbRTA2300PQZs,StV299IR5rfgvvc22O,XZujujKOO844EqrJ,sxZAQsssdYY641234hgH,WFGgvRHb566788QWSDB,juYJUnhh7770123xzV,bBbBGT6789JKWQAYYy,plmkKO9956RVVB,erEQUhgtFV441cVF0,yunjIIO987QGFreepo,sakaMAhnhjyy441,dgYjj775513dGjb,DUJKjggJM99234,xDCFDFV511UZWM944,zSxdG88900jjiu4,dEfdevc456bj90moMNFRF1r,kmPO06y3WXgt1t,DXb779YhyuhLqpJn8876,DXb779Y55TTYH60,xQPO98jn5TvdgJT5,VBGGrR4Eswsw12,hujGYTGh77865OP,SDCrTHHY664CF211FN,EWD45FQQ2SQth6a,uJHHrf456VDCq,mk23aq199I74ggq,bhbHnn7y654e,gyhRF45wwS,rTGGH562mnhN,rTGGH5ik8865,nNmY665frf43456gB,NJHtghjN6734EW,BhNNyH677EE34RGB,sdTGH6109ijju,nmuJujUtgrf5661,nmuJujnrdf67,bh6y7uww3AQSW,bh6y76y3321,SDqw2187eWED,SD90OLL5Tws,tga4456tgHu,zsxDf532wn07,nha667Hvc4Dq123mnCVrRF,NMI88Iygf5FEd3wXQWc';
        $explodeQrs = explode(',',$qrs);
        foreach ($explodeQrs as $key => $value) {
            Qr::create([
                'status' => 'pending',
                'code' => $value
            ]);
        }

    }
}

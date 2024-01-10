function dropbutton(value){
    var text=value
    var top=document.getElementById("topp")
    top.innerHTML=`<button class="dropbtn" id="topp">${text}</button>`

    var krit_change=document.getElementById("krit_change")
    switch (value){
        case "Учебная":
            krit_change.innerHTML=
            `<input type="submit" id=1 value="Получение студентом в течение зимней  и летней сессии 2022/2023 уч.года только оценок отлично" onclick=dropbutton2(value,id)></input>
            
            <input type="submit" id=2 value="Награда (приз) за результаты проектной деятельности и (или) опытно- конструкторской работы" onclick=dropbutton2(value,id)></input>
            
            <input type="submit" id=3 value="Признание студента победителем или призером международной, 
            всероссийской ведомственной или региональной олимпиады, конкурса, соревнования, состязания или иного мероприятия, 
            направленных на выявление учебных достижений студентов" onclick=dropbutton2(value,id)></input>`
        break;
        case "Научно-исследовательская":
            krit_change.innerHTML=
            `<input type="submit" id=4 value="Награда (приз) за результаты научно-исследовательской работы, проводимой студентом" onclick=dropbutton2(value,id)></input>
            
            <input type="submit" id=5 value="Документ, удостоверяющий исключительное право студента на достигнутый им научный (научно-методический, научно-технический,
             научно творческий) результат интеллектуальной деятельности (патент, свидетельство)" onclick=dropbutton2(value,id)></input>
            
             <input type="submit" id=6 value="Грант на выполнение научно-исследовательской работы" onclick=dropbutton2(value,id)></input>

             <input type="submit" id=7 value="Публикации в научном (учебно-научном, учебно-методическом) международном, всероссийском,
              ведомственном или региональном издании, в издании Университета или иной организации" onclick=dropbutton2(value,id)></input>`
        break;
        case "Общественная":
            krit_change.innerHTML=
            `<input type="submit" id=8 value="Систематическое участие студента в проведении (обеспечении проведения) общественно значимой
             деятельности социального, культурного, правозащитного, общественно полезного характера, организуемого Университетом или с его участием,
              подтверждаемое документально" onclick=dropbutton2(value,id)></input>
            
            <input type="submit" id=9 value="Систематическое участие студента в деятельности по информационному обеспечению общественно значимых мероприятий, 
            общественной жизни Университета, подтверждаемое документально" onclick=dropbutton2(value,id)></input>`
        break;
        case "Культурно-творческая":
            krit_change.innerHTML=
            `<input type="submit" id=10 value="Награда (приз) за результаты культурно-творческой деятельности, в том числе в рамках конкурса, смотра и иного аналогичного международного,
             всероссийского, ведомственного, регионального" onclick=dropbutton2(value,id)></input>
            
            <input type="submit" id=11 value="Публичное представление студентом созданного им произведения литературы или искусства, подтверждаемое документально"
             onclick=dropbutton2(value,id)></input>

             <input type="submit" id=12 value="Систематическое участие студента в проведении (обеспечении проведения) публичной культурно-творческой деятельности воспитательного, 
             пропагандистского характера и иной общественно-значимой публичной культурно-творческой деятельности, подтверждаемое документально "
             onclick=dropbutton2(value,id)></input>`
        break;
        case "Спортивная":
            krit_change.innerHTML=
            `<input type="submit" id=13 value="Награда (приз) за результаты спортивной деятельности, осуществленной им в рамках спортивных международных, всероссийских,
             ведомственных, региональных мероприятий, проводимых Университетом или иной организацией" onclick=dropbutton2(value,id)></input>
            
            <input type="submit" id=14 value="Систематическое участие студента в спортивных мероприятиях воспитательного, пропагандистского характера и (или) иных общественно
             значимых спортивных мероприятиях, подтверждаемое документально"
             onclick=dropbutton2(value,id)></input>

             <input type="submit" id=15 value="Выполнение нормативов и требований золотого знака отличия Всероссийского физкультурно-спортивного комплекса Готов к труду и обороне
              (ГТО) соответствующей возрастной группы"
             onclick=dropbutton2(value,id)></input>`
        break;
    }
}
function dropbutton2(value,id){
    var text=value
    var krit=document.getElementById("krit")
    krit.innerHTML=`<button class="dropbtn" id="krit" name=${id}>${text}</button>`

    var status_change=document.getElementById("status_change")
    switch(id){
        case "1":
            status_change.innerHTML=`<input type="submit" id=6 value="без уровня" onclick=dropbutton3(value,id)></input>`//id=баллы
        break;
        case "2":
            status_change.innerHTML=`<input type="submit" id=2 value="на уровне факультета/филиала" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=3 value="на уровне университета" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=4 value="на региональном/муниципальном уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=5 value="на всероссийском/ведомственном уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=6 value="на международном уровне" onclick=dropbutton3(value,id)></input>`//id=баллы
        break;
        case "3":
            status_change.innerHTML=`<input type="submit" id=6 value="на региональном уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=7 value="на всероссийском/ведомственном уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=8 value="на международном уровне" onclick=dropbutton3(value,id)></input>`//id=баллы
        break;
        case "4":
            status_change.innerHTML=`<input type="submit" id=3 value="на уровне факультета/филиала" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=4 value="на уровне университета" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=5 value="на региональном (ведомственном, межвузовском уровне)" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=6 value="на всероссийском уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=7 value="на международном уровне" onclick=dropbutton3(value,id)></input>`//id=баллы
        break; 
        case "5":
            status_change.innerHTML=`<input type="submit" id=8 value="без уровня" onclick=dropbutton3(value,id)></input>`//id=баллы
        break;
        case "6":
            status_change.innerHTML=`<input type="submit" id=8 value="без уровня" onclick=dropbutton3(value,id)></input>`//id=баллы
        break;
        case "7":
            status_change.innerHTML=`<input type="submit" id=3 value="в издании  университета" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=4 value="на региональном уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=5 value="на всероссийском уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=6 value="на международном уровне" onclick=dropbutton3(value,id)></input>`//id=баллы
        break;
        case "8":
            status_change.innerHTML=`<input type="submit" id=2 value="на уровне факультета/филиала" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=3 value="на уровне университета" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=4 value="на региональном (ведомственном, межвузовском уровне)" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=5 value="на всероссийском уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=6 value="на международном уровне" onclick=dropbutton3(value,id)></input>`//id=баллы
        break; 
        case "9":
            status_change.innerHTML=`<input type="submit" id=2 value="на уровне факультета/филиала" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=3 value="на уровне университета" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=4 value="на региональном (ведомственном, межвузовском уровне)" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=5 value="на всероссийском уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=6 value="на международном уровне" onclick=dropbutton3(value,id)></input>`//id=баллы
        break; 
        case "10":
            status_change.innerHTML=`<input type="submit" id=5 value="на региональном (ведомственном, межвузовском уровне)" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=6 value="на всероссийском уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=7 value="на международном уровне" onclick=dropbutton3(value,id)></input>`//id=баллы
        break;
        case "11":
            status_change.innerHTML=`<input type="submit" id=8 value="без уровня" onclick=dropbutton3(value,id)></input>`//id=баллы
        break;
        case "12":
            status_change.innerHTML=`<input type="submit" id=1 value="на уровне факультета/филиала" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=2 value="на уровне университета" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=3 value="на региональном (ведомственном, межвузовском уровне)" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=4 value="на всероссийском уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=5 value="на международном уровне" onclick=dropbutton3(value,id)></input>`//id=баллы
        break;
        case "13":
            status_change.innerHTML=`<input type="submit" id=3 value="на уровне университета" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=4 value="на региональном (ведомственном, межвузовском уровне)" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=5 value="на всероссийском уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=6 value="на международном уровне" onclick=dropbutton3(value,id)></input>`//id=баллы
        break;
        case "14":
            status_change.innerHTML=`<input type="submit" id=2 value="на уровне факультета/филиала" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=3 value="на уровне университета" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=4 value="на региональном (ведомственном, межвузовском уровне)" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=5 value="на всероссийском уровне" onclick=dropbutton3(value,id)></input>
            <input type="submit" id=6 value="на международном уровне" onclick=dropbutton3(value,id)></input>`//id=баллы
        break;
        case "15":
            status_change.innerHTML=`<input type="submit" id=6 value="без уровня" onclick=dropbutton3(value,id)></input>`//id=баллы
        break;

    }
}
function dropbutton3(value,id){
    var text=value
    var status=document.getElementById("status")
    status.innerHTML=`<button class="dropbtn" id="status" name=${id}>${text}</button>`
    var bal=document.getElementById("bal")
    bal.innerHTML=`<td id="bal">${id}</td>`
}
